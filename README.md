# Laravel Make Composer

This package add a make:composer Artisan command to create view composer classes.

## Install

```
composer require --dev jsjunior/laravel-make-composer
```

## Requirements
Laravel >= 5.5

## Default location
By default, new view composers are created in a ```App\View\Composers``` folder. 

To change it, add a COMPOSERS_PATH variable to your .env file. Example:

```
COMPOSERS_PATH=\my\composers\location
```

New composers will be created in ```App\My\Composers\Location``` folder.
