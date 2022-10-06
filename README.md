<!-- TODO: Complete the description and about the appropriate license. -->
# Workshop

Documents management application based on Laravel and Bootstrap. Includes the following integrations:

- Mailchimp newsletter subscription
- Sendgrid email marketing
- Cloudinary assets upload

## Getting Started :rocket:

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites :clipboard:

The programs you need are:

-   [Composer](https://getcomposer.org/download/).
-   [Node.js](https://nodejs.org/en/download/).
-   Database and a web server with PHP.

### Installing 🔧

Duplicate the file .env.example as .env and set your credential for the database in.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=cars_test
DB_USERNAME=root
DB_PASSWORD=
```

Then install the PHP packages.

```
composer upgrade
```

Generate the application key.

```
php artisan key:generate
```

Then install the JavaScript packages with npm.


Finally generate the database with fake data:

```
php artisan migrate --seed
```

## Running the project :computer:

Finally run the serve

```
php artisan serve
```



Set in the file .env the next configuration.

```
APP_ENV=production
```

## Built With 🛠️

-   [Laravel 8.0](https://laravel.com/docs/8.x/) - Framework PHP.

