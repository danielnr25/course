

## Teach Me

Teach Me es una aplicación de cursos gratis de inscripcion para virtual o presencial.
El sistema está realizado con el Framework Laravel y cuenta con las siguientes funcionalidades:

- Sección para que el profesor pueda dar alta a sus cursos y unidades.
- Sección para que el alumno pueda visualizar sus cursos.
- Envío de la inscripción via email
- Valoraciones.
- Sección para debates.
- Sección de cursos, con diferentes profesores.

## Instalación

- Clonar repositorio desde https://github.com/danielnr25/course.git
- **composer install**
- **php artisan key:generate**

## Base de datos

- Crear Base de datos db_teachme
  - **DB_CONNECTION=** 
  - **DB_HOST=**
  - **DB_PORT=**
  - **DB_DATABASE=** db_teachme
  - **DB_USERNAME=** root
  - **DB_PASSWORD=**
- Correr las migraciones con **php artisan migrate --seed**
- Correr el servidor con **php artisan serve**

## Mailtrap

- Configuración cuenta de Mailtrap (.env file).
  
  - **MAIL_MAILER=**
  - **MAIL_HOST=**
  - **MAIL_PORT=**
  - **MAIL_USERNAME=**
  - **MAIL_PASSWORD=**
  - **MAIL_ENCRYPTION=**
  - **MAIL_FROM_ADDRESS=**
  - **MAIL_FROM_NAME=**"${APP_NAME}"


## Desarrollado

- **Danilo 2023**
