<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Proyecto de Gestión de Usuarios

Este proyecto es una aplicación web de gestión de Usuarios construida con Laravel y Docker. Permite a los usuarios subir, ver, renombrar y eliminar archivos. Además, proporciona roles de usuario específicos para administradores, profesores y estudiantes.

## Instalación

1. Clona el repositorio en tu máquina local.
2. Navega hasta el directorio del proyecto.
3. Asegúrate de tener Docker y Docker Compose instalados en tu máquina.
4. Ejecuta `docker-compose up -d` para construir y ejecutar los contenedores Docker.
5. Ejecuta `docker-compose exec myapp composer install` para instalar las dependencias del proyecto.
6. Copia el archivo `.env.example` a un nuevo archivo llamado `.env`.
7. Ejecuta `docker-compose exec myapp php artisan key:generate` para generar una nueva clave de aplicación.
8. Configura tu base de datos en el archivo `.env`. Usa los valores de `DB_HOST=mariadb`, `DB_PORT=3306`, `DB_USERNAME=bn_myapp`, `DB_DATABASE=bitnami_myapp`.
9.  Ejecuta `docker-compose exec myapp php artisan migrate` para crear las tablas de la base de datos.

## Uso

La aplicación tiene varias rutas principales:

- `/`: La página de inicio.
- `/login`: La página de inicio de sesión.
- `/signup`: La página de registro.
- `/admin`: La página de inicio del administrador.
- `/profesor`: La página de inicio del profesor.
- `/file`: La página de inicio de la gestión de archivos.
- `/student`: La página de inicio del estudiante.

Cada una de estas rutas tiene varias subrutas para crear, ver, editar y eliminar recursos.

