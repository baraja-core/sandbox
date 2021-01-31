Baraja Nette Sandbox
====================

[Nette](https://nette.org) is a popular tool for PHP web development.
It is designed to be the most usable and friendliest as possible. It focuses
on security and performance and is definitely one of the safest PHP frameworks.

This is an upgraded version of the the basic Nette Sandbox that you can use as the starting point for your new applications.
The PROs of this Sandbox is that is featuring the [PackageManager](https://github.com/baraja-core/package-manager), a great tool that allows you to search all the package dependencies automatically and register them to your project.
It is also fully configured and prepared to support the use of [Doctrine](https://github.com/baraja-core/doctrine) which is a simple and easy to use, maximal performance database layer.

Installation
------------

To install the sandbox you should use Composer. To do so, find your web root directory (e.g. `/var/www` or `C:\InetPub`) in your command line and execute the following command:

`composer create-project baraja/sandbox <your-project-name>`

The sandbox will be downloaded into your newly created directory.

If you're developing on Mac OS X or Linux (or any other Unix based system), you need to configure write privileges to the web server.
So in the terminal write:

`cd <your-project-name> && chmod -R a+rw temp log`

Web Server Setup
----------------

The simplest way to get started is to start the built-in PHP server in the root directory of your project:

`php -S localhost:8000 -t www`

Then visit `http://localhost:8000` in your browser to see the welcome page.

For Apache or Nginx, setup a virtual host to point to the `www/` directory of the project and you should be ready to go.

It is CRITICAL that whole `app/`, `log/` and `temp/` directories are not accessible directly via a web browser. See [security warning](https://nette.org/security-warning).

Requirements
------------

- Baraja Sandbox for Nette 3.0 requires PHP 7.1

To check if the server configuration meets the minimum requirements for
Nette Framework, browse to the directory `/checker` in your project root (i.e. `http://localhost:8000/checker`).

Adminer
-------

[Adminer](https://www.adminer.org/) is a fully featured database management tool written in PHP and it integrates well with the Sandbox.

To use it, browse to the subdirectory `/adminer` in your project root (i.e. `http://localhost:8000/adminer`).

Other sources
-------------

Other manuals and more you can read on [Czech PHP Manual](https://php.baraja.cz) by [Baraja](https://baraja.cz).

This sandbox is also fully compatible with [Vue framework](https://vue.baraja.cz) and [Structured API](https://github.com/baraja-core/structured-api).
