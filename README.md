# Raspberry

Raspberry is a PHP Framework that is based on making Web Application Development Easier and Faster with a Secured Architecture.

In Berry, To import a php script the code below should be used:

```php
    require_once "page/home.php";
```

To execute your application, run the code in your terminal :

```cmd
    php -S 127.0.0.1:33455
```

## Architecture

1. MVC
    -  

2. FAB
    - FrontEnd
        - Widget
        - App
        - src
        - Pages
        - libs
    - BackEnd
        - Models
        - Router
    - Api

## Requirements

- MySQL
- PHP ^8.0.25
- PHP Extension (For VS code users);

## Development

### Router

The development of a router in berry works by a client that listens for request made to that route and sends a response

## Old htacess

```.htaccess
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^(.*)$ index.php/$1 [L]
```
