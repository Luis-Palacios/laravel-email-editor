# Laravel Email Editor

An Email Editor powered by Laravel and react

## Requirements

1. [PHP >= 7.1.3](https://www.php.net/)
2. [Composer](https://getcomposer.org/)
3. [MySQL](https://www.mysql.com/)
4. [Nodejs](https://nodejs.org/en/)

## Setup

1. Execute `php composer.phar install` in the root of the project
2. Execute `npm install` in the root of the project
3. Create an empty mysql database for the application
4. Create your own `.env` file on the root of the project, you can use `.env.example` as a template then define your APP_KEY and DB Connection settings. **Note:** If you are using version 8 or higher from mysql you must use a login `WITH mysql_native_password` or Authentication Type: Standard otherwise you will run into an error like the following: `The server requested authentication method unknown to the client` more info here: [Laravel and mysql v8](https://ma.ttias.be/mysql-8-laravel-the-server-requested-authentication-method-unknown-to-the-client/)
5. Generate your app key executing `php artisan key:generate` from the command line
6. Run migrations executing `php artisan migrate` from the command line
