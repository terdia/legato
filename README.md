# Legato PHP Framework - Beta
[![Build Status](https://travis-ci.org/terdia/legato.svg?branch=master)](https://travis-ci.org/terdia/legato)
[![Maintainability](https://api.codeclimate.com/v1/badges/43a822fd888750a58205/maintainability)](https://codeclimate.com/github/terdia/legato/maintainability)
## About Legato

Legato is a web application framework that seats on the shoulders 
of giants like symfony and laravel, when you need a lightweight framework for PHP development. 

## Installation Requirements
php 7.1 and above
composer 

## Installation
```bash
$ composer create-project legato/legato blog

$ cd blog

$ composer dumpautoload
```

## Running Your Project
The entry point for Legato framework is the index.php file inside of public directory, off course you're free to change this according to your need. You may need to create an entry in /etc/httpd/vhosts (for apache users) similar to the following:

```
<VirtualHost *:80>
    DocumentRoot /var/www/html/blog
    ServerName example.com
</VirtualHost>
```
Restart Apache
```bash
$ service httpd restsart
```
Navigatte to http://example.com, you should be able to view the app.

## Learning Legato

Legato documentation will be released soon.

## Contributing

Thank you for considering contributing to the Legato framework! Feel free to create a pull request.
The contribution guide will be released soon.

## Security Vulnerabilities

If you discover a security vulnerability within Legato, 
please send an e-mail to Terry Ogbemudia Osayawe 
via [terry@devscreencast.com](mailto:terry@devscreencast.com). 
All security vulnerabilities will be promptly addressed.

## License

The Legato framework is open-sourced software 
licensed under the [MIT license](https://opensource.org/licenses/MIT).
