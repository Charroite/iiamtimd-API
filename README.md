Deploy instructions WIP:
```bash
$ composer install
```

```php
# Copy .env file from example
php -r "file_exists('.env') || copy('.env.example', '.env');"
```

```php
php artisan key:generate
php artisan jwt:secret
npm install
```
Verander de databasecredentials in je .env file

Finally, migrate en seed de database als dit nog niet gedaan is:
```php
$ php artisan migrate:fresh --seed
```

en eventueel bij errors
```bash
$ composer dump-autoload
$ php artisan db:seed
```
