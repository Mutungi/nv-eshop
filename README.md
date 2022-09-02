# Competence Based Ebook Shop
## How To Run The Application

After you have cloned the application from github.

Edit the .env file and add your database configuration

After Run The Following Commands

- php spark migrate
- php spark db:seed ClasslevelSeeder
- php spark db:seed SubjectsSeeder
- php spark server


## Server Requirements

PHP version 8.0 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)
