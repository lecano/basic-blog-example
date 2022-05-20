Basic CRUD blog example with Laravel 9, Bootstrap 5 and SQLite.

## Install

```bash
composer install
```

```bash
cp .env.example .env
```

Open and edit .env file:

```bash
DB_CONNECTION=sqlite
DB_DATABASE='full-path-to/database/database.sqlite'

# Windows example:
DB_DATABASE='D:/repo-name/database/database.sqlite'
```

```bash
touch database.sqlite 
```

```bash
php artisan key:generate
```

```bash
php artisan migrate --seed
```

```bash
php artisan storage:link
```

Open `http://127.0.0.1:8000`

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
