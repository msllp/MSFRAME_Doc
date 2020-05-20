# Installation

- [Installation](#installation)
    - [Server Requirements](#server-requirements)
    - [Installing MS Frame](#installing-laravel)
    - [Configuration](#configuration)
- [Web Server Configuration](#web-server-configuration)
    - [Pretty URLs](#pretty-urls)

<a name="installation"></a>
## Installation

> MS Frame build to provide best and robust all in one package to develop a production application.   

<a name="server-requirements"></a>
### Server Requirements

The MS fram has a few system requirements.

you will need to make sure your server meets the following requirements:

<div class="content-list" markdown="1">

- PHP >= 7.2.5
- BCMath PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- Mbstring PHP Extension
- OpenSSL PHP Extension
- PDO PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
</div>

<a name="installing-laravel"></a>
### Installing MS Frame

MS Frame utilizes [Composer](https://getcomposer.org) to manage its dependencies. So, before using MS Frame, make sure you have Composer installed on your machine.


#### Via Composer Create-Project

you may install MS Frame by issuing the Composer `create-project` command in your terminal:

    composer create-project --prefer-dist msllp/msframe blog

#### Local Development Server

If you have PHP installed locally and you would like to use PHP's built-in development server to serve your application, you may use the `serve` mama command. This command will start a development server at `http://localhost:8000`:

    php mama serve

<a name="configuration"></a>
### Configuration

#### Public Directory

After installing MS Frame, you should configure your web server's document / web root to be the `public` directory. The `index.php` in this directory serves as the front controller for all HTTP requests entering your application.

#### Configuration Files

All of the configuration files for the MS Frame framework are stored in the `config` directory. Each option is documented, so feel free to look through the files and get familiar with the options available to you.

#### Directory Permissions

After installing MS Frame, you may need to configure some permissions. Directories within the `storage` ,`MS/DB` & the `bootstrap/cache` directories should be writable by your web server or MS Frame will not run.

#### Application Key

The next thing you should do after installing MS Frame is set your application key to a random string. If you installed MS Frame via Composer , this key has already been set for you by the `php mama key:generate` command.

Typically, this string should be 32 characters long. The key can be set in the `.env` environment file. If you have not renamed the `.env.example` file to `.env`, you should do that now. **If the application key is not set, your user sessions and other encrypted data will not be secure!**

#### Additional Configuration

MS Frame needs almost no other configuration out of the box. You are free to get started developing! However, you may wish to review the `config/MS.php` file and its documentation. It contains several options such as `timezone` and `locale` that you may wish to change according to your application.



<a name="web-server-configuration"></a>
## Web Server Configuration

<a name="pretty-urls"></a>
### Pretty URLs

#### Apache

MS Frame includes a `public/.htaccess` file that is used to provide URLs without the `index.php` front controller in the path. Before serving MS Frame with Apache, be sure to enable the `mod_rewrite` module so the `.htaccess` file will be honored by the server.

If the `.htaccess` file that ships with MS Frame does not work with your Apache installation, try this alternative:

    Options +FollowSymLinks -Indexes
    RewriteEngine On

    RewriteCond %{HTTP:Authorization} .
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]

#### Nginx

If you are using Nginx, the following directive in your site configuration will direct all requests to the `index.php` front controller:

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }


