# Guía de Migración Manual a Hostinger (Paso a Paso)

Esta guía documenta el procedimiento exacto que realizamos de manera automatizada para migrar el sitio de desarrollo local a producción en Hostinger. Sigue estos pasos si necesitas realizar el proceso manualmente en el futuro.

---

## 📦 Paso 1: Preparación de Archivos en Local

Antes de subir nada, debes generar los archivos listos en tu máquina local:

1. **Comprimir los archivos de diseño e imágenes:**
   Ejecuta esto desde la raíz del proyecto para crear un archivo zip excluyendo las carpetas de caché y actualizaciones temporales:
   ```bash
   zip -r wp-content.zip wp-content -x "wp-content/cache/*" -x "wp-content/upgrade/*"
   ```

2. **Exportar la Base de Datos:**
   Exporta la base de datos limpia de tu contenedor de Docker usando `mysqldump` sin exportar las tablas de espacio (requerido por MySQL 8.0):
   ```bash
   docker exec -i fluent_futures_db mysqldump --no-tablespaces -uwordpress -pwordpress_password wordpress > fluent_futures_local.sql
   ```

---

## ⬆️ Paso 2: Subida de Archivos a Hostinger

Sube los archivos creados (`wp-content.zip` y `fluent_futures_local.sql`) al servidor de Hostinger.

* Puedes usar un cliente FTP/SFTP (como FileZilla) o comandos rápidos de terminal (`scp`):
  ```bash
  # Subir el ZIP
  scp -P 65002 wp-content.zip u124381862@185.212.71.129:~/
  
  # Subir el SQL
  scp -P 65002 fluent_futures_local.sql u124381862@185.212.71.129:~/
  ```
  *(Reemplaza el usuario `u124381862` e IP `185.212.71.129` si llegan a cambiar en el futuro).*

---

## 💻 Paso 3: Conexión por SSH y Despliegue de Archivos

1. **Conéctate por SSH al servidor:**
   ```bash
   ssh -p 65002 u124381862@185.212.71.129
   ```

2. **Haz un respaldo de la carpeta wp-content original (del WordPress en blanco):**
   ```bash
   mv ./domains/fluent-futures.com/public_html/wp-content ./domains/fluent-futures.com/public_html/wp-content-backup
   ```

3. **Descomprime el archivo subido en la raíz de la web:**
   ```bash
   unzip -o ~/wp-content.zip -d ./domains/fluent-futures.com/public_html/
   ```

---

## 🗄️ Paso 4: Configuración de la Base de Datos con WP-CLI

Ejecuta estos comandos dentro de la consola SSH:

1. **Importa la base de datos local a producción:**
   ```bash
   wp db import ~/fluent_futures_local.sql --path=./domains/fluent-futures.com/public_html
   ```

2. **Reemplaza la URL local por la URL de producción de forma segura:**
   WordPress almacena configuraciones en datos serializados. El comando `search-replace` de WP-CLI evita que se corrompan:
   ```bash
   wp search-replace 'http://localhost:8080' 'https://fluent-futures.com' --path=./domains/fluent-futures.com/public_html
   ```

3. **Limpia la caché de datos de WordPress:**
   ```bash
   wp cache flush --path=./domains/fluent-futures.com/public_html
   ```

---

## ⚙️ Paso 5: Permisos y Limpieza Final

Por seguridad, ajusta los permisos en producción y borra los archivos temporales:

1. **Establece permisos seguros para las imágenes y plugins subidos:**
   ```bash
   chmod -R 755 ./domains/fluent-futures.com/public_html/wp-content/uploads/
   ```

2. **Borra los archivos de instalación temporales del servidor:**
   ```bash
   # Borrar los instaladores de la raíz del servidor SSH
   rm -f ~/wp-content.zip ~/fluent_futures_local.sql
   
   # Borrar el backup de wp-content antiguo para liberar espacio
   rm -rf ./domains/fluent-futures.com/public_html/wp-content-backup
   ```

3. **Purga la caché del servidor web (LiteSpeed):**
   Si el plugin `litespeed-cache` no está activo, instálalo e inicialo para limpiar toda la caché de página:
   ```bash
   wp plugin install litespeed-cache --activate --path=./domains/fluent-futures.com/public_html
   wp litespeed-purge all --path=./domains/fluent-futures.com/public_html
   ```
