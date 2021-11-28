# Laravel artisan make command for packages development
Use artisan `make` command to create files directly inside your package

## Installation
**Install this package with composer:**
```bash
$ composer require allenkhoury/al-make
```

Service Provider will be discovered automatically by laravel.
**Publish the config file:** *(required)*
```bash
$ php artisan vendor:publish --provider="AllenKhoury\AlMake\AlMakeServiceProvider"
```

This will publish the following:
- config/al-make.php

## Usage
```php
   php artisan almake:model User Repo/Package
```
`almake` usage is similar to `make` command, you just need to add your package namespace after the class name, you can also use the default options for each make command.

### Config
In order for `almake` to work properly, you need to add your package info inside `al-make.php` config file, inside the `packages_list` array:
```php
'RepositoryName\\PackageName' => [
    'dir' => 'myrepository\\mypackage', // location to your package
    'root' => 'src', // Your package root directory
    'migrations' => 'src\\Database\\Migrations', // Migrations path
],
```

By default, the packages directory is set to `packages`, you can change it in `al-make.php`:
```php
'packages_dir' => 'packages',
```

## All commands
```bash
php artisan almake:cast
php artisan almake:channel
php artisan almake:command
php artisan almake:component
php artisan almake:controller
php artisan almake:event
php artisan almake:exception
php artisan almake:factory
php artisan almake:job
php artisan almake:listener
php artisan almake:mail
php artisan almake:middleware
php artisan almake:migration
php artisan almake:model
php artisan almake:notification
php artisan almake:observer
php artisan almake:policy
php artisan almake:provider
php artisan almake:request
php artisan almake:resource
php artisan almake:rule
php artisan almake:seeder
php artisan almake:test
```

## License
The MIT License (MIT). Please see [License File](https://github.com/.../blob/master/LICENSE.md) for more information.