# Blog personal - Bad Vibrations 🎸

**Bad Vibrations** es un blog personal de reseñas de álbumes musicales. Desarrollado como parte de un trabajo práctico, el sitio me permite publicar críticas de discos, mientras que los usuarios autenticados pueden dejar comentarios en las reseñas. El objetvivo es compartir opiniones desde una perspectiva personal.

## ⚙️ Tecnologías utilizadas

- **Laravel**
- **TailwindCSS**
- **MySQL**
- **Alpine.js**
- **Blade**

## 🔐 Autenticación

El sitio incluye sistema de registro e inicio de sesión usando la autenticación de Laravel.  
**No es obligatorio autenticarse para navegar.**

## 📦 Instalación

1. Clonar el repositorio:
   ```bash
   git clone https://github.com/Romartinez97/blog-personal.git
   cd blog-personal
   ```

2. Instalar dependencias:
   ```bash
   composer install
   npm install
   ```

3. Crear archivo `.env`:
   ```bash
   cp .env.example .env
   ```

4. Generar la clave de la app:
   ```bash
   php artisan key:generate
   ```

5. Configurar la conexión a la base de datos en `.env`:
    ```.env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=blog_personal
    DB_USERNAME=root
    DB_PASSWORD=
    ```

6. Crear la base de datos manualmente:

- Abrí http://localhost/phpmyadmin
- Hacé clic en "Nueva"
- Ingresá "blog_personal" como nombre de la base de datos

7. Crear el enlace simbólico para almacenar imágenes:
    ```bash
   php artisan storage:link
    ```

8. Ejecutar migraciones y seeders:
   ```bash
   php artisan migrate --seed
   ```

9. Compilar los assets:
   ```bash
   npm run dev
   ```

10. Levantar el servidor en otra terminal::
   ```bash
   php artisan serve
   ```

## ⚠️ Observación importante
Si estás usando XAMPP, asegurate de que las siguientes extensiones estén habilitadas en tu archivo php.ini:

*extension=mysqli*\
*extension=pdo_mysql*

Estas líneas deben estar descomentadas (sin punto y coma ; al inicio). Luego de modificarlas, reiniciá Apache desde el panel de control de XAMPP.