<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


## Descrição

O projeto produtos-app é uma aplicação Laravel que permite gerenciar produtos com operações de CRUD (Create, Read, Update, Delete) e exclusão suave (soft deletes). Ele utiliza migrações Eloquent, controllers de recurso, models com SoftDeletes e views Blade para oferecer uma interface simples e intuitiva.

## Pré-requisitos

É necessário ter PHP ≥ 8.0, Composer e MySQL instalados para rodar a aplicação localmente.




## Rodando localmente

Clone o projeto

```bash
  git clone https://github.com/JMathRATEC/produtos-app.git
```

Entre no diretório do projeto

```bash
  cd produtos-app
```

Instale as dependências

```bash
  composer install

```

Configurar variáveis de ambiente

```bash
  cp .env.example .env

```

Gerar chave da aplicação

```bash
  php artisan key:generate

```

### Configuração do Banco de Dados
Crie um banco de dados MySQL e configure as credenciais em .env (DB_DATABASE, DB_USERNAME, DB_PASSWORD). Em seguida, execute as migrações com:
```bash
  php artisan migrate

```

### Executando a Aplicação
```bash
  php artisan serve

```
e abra no navegador:

```bash
  http://127.0.0.1:8000/produtos

```
