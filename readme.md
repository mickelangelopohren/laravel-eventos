
# 4all Eventos Laravel

### Sobre:

Sistema de eventos para teste de seleção da 4all.

### Requerimentos:

* [PHP 7.2.15](https://secure.php.net/manual/pt_BR/install.php)
* [Composer](https://getcomposer.org/doc/faqs/how-to-install-composer-programmatically.md)
* [Laravel 5.7](https://laravel.com/docs/5.7/installation)
* [MySQL Server](https://dev.mysql.com/doc/mysql-installation-excerpt/5.7/en/linux-installation.html)
* [Git](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git)

### Instalação:

Clone o projeto:
```sh
$ git clone https://github.com/mickelangelopohren/laravel-eventos.git
```
Instale os componentes:
```sh
$ cd laravel-eventos
$ composer install
```
Adicione as permissões:
```sh
$ chmod -R 775 bootstrap/cache
$ chmod -R 775 storage
```

#### * Ajuste as configurações do DB no arquivo .env


Rode as migrações e seeds:
```sh
$ php artisan migrate
$ php artisan db:seed --class=TabelaEventosSeeder
```

Inicialização local do projeto:
```sh
$ php artisan key:generate
$ php artisan serve
```
Obs: após iniciado localmente, acesse http://127.0.0.1:8000/ apartir de qualquer navegador. 

### Imagens:

Index:
![eventos-index](https://farm8.staticflickr.com/7891/47210540182_445e5b614e_h.jpg)
Detalhes:
![eventos-detalhes](https://farm8.staticflickr.com/7866/47262334421_34d12f8f17_h.jpg)
Compra:
![eventos-comprar](https://farm8.staticflickr.com/7916/46347901855_8c67f96a3f_h.jpg)
Finalizar:
![eventos-finalizar](https://farm8.staticflickr.com/7911/46347902565_45f92fc7d5_h.jpg)