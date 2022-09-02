# Competence Based  Shop
## How To Run The Application

After you have cloned the application from github.

Edit the .env file and add your database configuration after create your database name and run migrations to create tables see commands below

Edit the file in app/Config/Email.php and add your prefered mailing server

After Run The Following Commands
- php spark migrate
- php spark db:seed ClasslevelSeeder
- php spark db:seed SubjectsSeeder
- php spark server

## Frameworks Used

- [Codeigniter Backend Framework] (https://codeigniter.com/user_guide/intro/index.html)
- [Bootstrap Frontend Framework ] (https://getbootstrap.com/)

## NOTE

CDNs have been used to source for external resources like sweetalerts, google fonts etc [An Internet Connection Maybe Required]

## Server Requirements

PHP version 8.0 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)
