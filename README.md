# Fluent Futures - Landing Page Bilingüe (WordPress + Docker)

Este repositorio contiene la infraestructura de desarrollo local, los archivos de medios (`wp-content`) y la base de datos de la landing page de **Fluent Futures**.

---

## 🛠️ Requisitos previos

Asegúrate de tener instalados en tu sistema:
*   [Docker](https://docs.docker.com/get-docker/)
*   [Docker Compose](https://docs.docker.com/compose/install/)

---

## 🚀 Cómo iniciar el sitio en una nueva PC

Para clonar y levantar el entorno local completo con todos los cambios y medios, sigue estos 3 sencillos pasos:

### 1. Iniciar los contenedores de Docker
Levanta la base de datos, el contenedor de WordPress y la herramienta de CLI en segundo plano:
```bash
docker-compose up -d
```

### 2. Restaurar la base de datos
Importa la base de datos completa (con todas las configuraciones de Polylang, menús y estilos) directamente en el contenedor de MySQL:
```bash
docker-compose exec -T db mysql -uwordpress -pwordpress_password wordpress < fluent_futures_db.sql
```

### 3. ¡Listo! Accede en tu navegador
Abre los siguientes enlaces locales para ver el resultado de inmediato:
*   **Versión en Inglés (Base)**: [http://localhost:8080/](http://localhost:8080/)
*   **Versión en Español**: [http://localhost:8080/es/](http://localhost:8080/es/)

---

## 🔑 Credenciales de Administración (Local)

Si necesitas acceder al panel de administración de WordPress (`http://localhost:8080/wp-admin/`):
*   **Usuario**: `admin`
*   **Contraseña**: `strong_password_123`

---

## 📁 Archivos Clave del Repositorio

*   `docker-compose.yml`: Define los servicios (`db`, `wordpress`, `wpcli`) y monta de forma local la carpeta `wp-content` para persistencia y control de versiones de plugins y uploads.
*   `fluent_futures_db.sql`: Respaldo completo de la base de datos MySQL 8.0.
*   `wp-content/`: Directorio local que contiene plugins (como Polylang), temas (Twenty Twenty-Four) y todas las imágenes cargadas por el cliente (`wp-content/uploads/`).
*   `setup_pages.php`: Script de automatización utilizado para inicializar y dar estilo a las páginas.

---

## 🔄 Sincronización de Base de Datos (Producción a Local)

Cuando el cliente hace modificaciones en producción (Hostinger) y necesitas traer esos cambios a tu entorno de desarrollo local para trabajar sobre la última versión, sigue estos pasos:

### 1. Sincronización de Base de Datos (Vía WP-CLI - Recomendado)

Debido a que WordPress guarda datos estructurados en formato serializado, hacer un buscar y reemplazar manual del dominio corrompe la base de datos. Debes usar WP-CLI:

1. **Exportar desde Hostinger:** Entra a hPanel > phpMyAdmin > Base de Datos de Producción. Ve a la pestaña **Exportar** y descarga el archivo `.sql` (por ejemplo, renombralo a `produccion.sql`).
2. **Colocar en la raíz:** Mueve el archivo `produccion.sql` a la raíz de este repositorio.
3. **Importar localmente en Docker:**
   ```bash
   docker-compose exec -T db mysql -uwordpress -pwordpress_password wordpress < produccion.sql
   ```
4. **Reemplazar URLs de forma segura:** Ejecuta el siguiente comando de WP-CLI para cambiar el dominio de producción por tu dirección local sin romper la serialización:
   ```bash
   docker-compose run --rm wpcli search-replace "https://fluentfutures.com" "http://localhost:8080" --all-tables
   ```
   *(Nota: Asegúrate de ajustar `https://fluentfutures.com` a la URL real que tenga el sitio en producción).*

---

### 2. Sincronización de Imágenes y Medios (`uploads`)

La base de datos solo contiene las rutas de los archivos. Si el cliente subió nuevas fotos en producción, debes traerlas a tu local:

1. Conéctate vía FTP/sFTP a tu cuenta de Hostinger.
2. Descarga la carpeta remota `wp-content/uploads/`.
3. Sobrescribe y fusiona los archivos dentro de tu directorio local `wp-content/uploads/`.

---

### 3. Alternativa Visual (Vía Plugins)

Si prefieres un flujo 100% visual sin usar comandos de terminal:

* **WP Migrate Lite (Plugin):** Instálalo en producción. Elige la opción *Export Database*, ingresa la URL de destino (`http://localhost:8080`) y descarga el `.sql` resultante, que ya viene pre-convertido para tu entorno local.
* **All-in-One WP Migration (Plugin):** Instálalo en producción y local. Exporta el archivo `.wpress` desde producción e impórtalo en tu local; el plugin adaptará las bases de datos de forma automática.

