<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## App Config

```
    - app -> Providers -> AppServiceProvider.php 

    use Illuminate\Support\Facades\Schema;

    - -> boot()

    Schema::defaultStringLength(191);

    - php artisan key: generate

```


## Model

```
    php artisan make:model Model_Directory/<Model_Name> -m
```

## Migration

```
    php artisan migrate
```

## Controller

```
    php artisan make:controller <Model_Controller> --resource
```

## Authentication

```
    -   composer require laravel/ui --dev
    -   php artisan ui vue --auth
    -   npm i && npm run dev

```

## Documentation

[Laravel](https://laravel.com/docs/6.x)
