<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sobre o projeto

Esse projeto é a minha versão, feita em Laravel, do Backend do treinamento Vue 3, o original é feito em Node e você pode visitar-lo <a href="https://github.com/vuejs-br/treinamento-vue3-code/tree/master/backend">Clicando aqui</a>. E com o que esse projeto conta ?

- [Laravel Sanctum](https://laravel.com/docs/11.x/sanctum#main-content) para autentificalção da API.
- Chaves primárias em [Uuid](https://laravel.com/docs/11.x/eloquent#uuid-and-ulid-keys).
- Uso das camadas de [API](https://laravel.com/docs/11.x/eloquent-resources#main-content).
- Uso do padrão [MVC](https://laravel.com/).


## Instalação do projeto

Clone o repositório com o comando abaixo:

```
git clone https://github.com/Welen1911/feedBacker_backend.git
```

Em seguida, rode esse:

```
composer install
```

Em seguida, rode esse para gerar a chave da aplicação:

```
php artisan key:generate
```
Em seguida, rode esse para criar o banco e as tabelas no seu MySQL/MariaDB:

```
php artisan migrate
```
*** Certifique-se que o seu banco de dados MySQL esteja funcionando ***

Em seguida, rode esse para ligar o servidor que ficará disponivel em <a href="http://127.0.0.1:8000/">http://127.0.0.1:8000/</a>:

```
php artisan serve
```
