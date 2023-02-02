# Pegasus

Proyecto con Laravel 8.x y VueJS 2.x.

- Lenguaje [PHP 8](https://www.php.net/)
- Base de Datos [MySQL](https://www.mysql.com/)
- Desarrollo Front con [VueJS](https://vuejs.org/)
- Autenticación con [Laravel Sanctum](https://laravel.com/docs/8.x/sanctum)
- Compilador de assets con [Laravel Mix](https://laravel.com/docs/7.x/mix)
- Control de código con Linters [PHP-CS](https://github.com/squizlabs/PHP_CodeSniffer), [Eslint](https://eslint.org/) y [StyleLint](https://stylelint.io/)
- Testing Backend con [Phpunit](https://phpunit.de/)

## Requisitos
Es necesario cumplir con los siguientes requisitos:

- Tener instalado [NodeJS](https://nodejs.org/en/)
- El IDE [PhpStorm](https://www.jetbrains.com/phpstorm/) 
- Un Editor como [Visual Studio Code](https://code.visualstudio.com/)
- Tu clave [SSH](https://git-scm.com/book/en/v2/Git-on-the-Server-Generating-Your-SSH-Public-Key)
- [NodeJS v16.19.0](https://nodejs.org/)


## Repositorio
Lo primero que se debe de hacer, es descargar el Repositorio en nuestra máquina local.

**Nota:** Será necesario configurar una clave SSH para poder clonar el Repositorio.

> Se debe trabajar en la rama develop: `git checkout develop`

### Usuario Git
Se debe configurar el usuario del Repositorio local mediante:

`git config user.name "TuNombre"`

`git config user.email "TuEmail@example.com"`

### Ramas
Existen dos ramas principales:

- master: Dónde se encuentra el código de Producción
- develop: La rama que utilizamos para desarrollar en local. Se debe hacer pull de esta rama para mantenerse actualizado.

Para desarrollar nuevas funcionalidades:

- features: Una rama por cada feature, debe nombrarse como ‘ft/<nombre>’
- hotfixes: Una rama por cada bug, debe nombrarse como 'hf/<nombre>'

### Base de Datos
MySQL y creará tantas Base de Datos como sea necesario.

## Setup
Una vez descargado el Repositorio del proyecto, se deben ejecutar los siguientes comandos para realizar el setup:

### Dependencias
 
- Instalar dependencias Back con `composer install`

- En la máquina local, instalar dependencias Front con `npm install` ó `yarn install`

### Configuración

- Generar la clave de la aplicación con:

 `php artisan key:generate`

 `php artisan jwt:secret`


## Desarrollo Front
Finalmente podremos compilar todo el front utilizando **Laravel Mix** con:

`npm run dev`

### Variables de Entorno

Hay que copiar el archivo **.env.example** como **.env** en la misma ruta y modificar su contenido
según corresponda. Las variables más importantes a modificar son:

- APP_URL=amoba.test
- DB_DATABASE=amoba
- DB_USERNAME=amoba
- DB_PASSWORD=amoba

## Mailtrap
Es recomendable crear una cuenta en Mailtrap para el desarrollo local. Mailtrap será un buzón de correo ficticio a donde
se enviarán todos los emails de la Aplicación.

- MAIL_MAILER=smtp
- MAIL_HOST=smtp.mailtrap.io
- MAIL_PORT=2525
- MAIL_USERNAME=
- MAIL_PASSWORD=

## Setup de Base de Datos MySQL
La Base de Datos está definida mediante migraciones y seeders de Laravel. Para montarla, desde la máquina virtual:

`php artisan migrate`

Y para rellenar con datos de prueba:

`php artisan db:seed` 

También se pueden hacer ambas cosas a la vez con:

`php artisan migrate --seed`

Para reconstruirla

`php artisan migrate:fresh`

Para reconstruir y rellenar con datos:

`php artisan migrate:fresh --seed`

## Live App
App de Desarrollo: no aplica al tests

App de Producción: no aplica al tests

## Licencia
No definida

## Documentación
Existe más documentación en el directorio /docs dee este Repositorio.

## Autor
Jonathan Sanchez - jonathanch1991@gmail.com