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
