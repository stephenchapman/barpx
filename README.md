# [Bar PX](http://www.barpx.com)

Bar PX is a speakeasy style bar in Alexandria, VA. This website is constructed using the Roots/Bedrock Wordpress stack, and is deployed using Capistrano. The production environment is a LAMP equiped Dreamhost VPS.

## Folder layout

| Folder | Notes |
| --- | --- |
| /config | Contains files to config environments, deployment settings. `application.php` is the main config file that contains what `wp-config.php` usually would. Base options should be set in there.  |
| /config/deploy | Contains editable settings for environments – production and staging |
| /config/environments | Contains environment specific configuration. The environment configs are required **before** the main `application` config so anything in an environment config takes precedence over `application`. |
| /vendor | Managed separately via Composer in each environment. |
| /web |  |
| /web/app | |
| /web/app/mu-plugins |  |
| /web/app/plugins |  |
| /web/app/themes |  Contains the barpx theme folder. |
| /web/app/uploads |  |


## Installation requirements

To set up the development environment for this website, you'll need to install the following on your system:

* Node.js/NPM/Grunt – To compile LESS to CSS, concatenate and validate JS, and to create minified assets that are used on non-development environments.
* Composer – To manage dependencies, including wordpress and all plugins.
* Capistrano – For automated deployments with a single line command and full version control with easy rollback capabilities.
* Git - Version control of all web app source code.
* PHP >= 5.3.2 (for Composer).
* Ruby >= 1.9 (for Capistrano).
* Apache - Server.
* MySQL - Database.

## Installation

See [Roots/Bedrock] (https://github.com/roots/bedrock) for detailed instructions on setting up a project.


## After installation

Git clone [Roots Theme Framework] (http://roots.io) into ~/web/wp/wp-content/themes/theme-name

```
git clone git@github.com:roots/roots.git ~/web/wp/wp-content/themes/theme-name
```
 
Run [HTML 5 Boilerplate .htaccess] (https://github.com/roots/wp-h5bp-htaccess) 

```
composer require roots/wp-h5bp-htaccess 1.1.0
```

Install NPM into theme folder. This will also install Bower (Roots uses Bower for managing Bootstrap, jQuery, Modernizr, and Respond.js.)

```
npm install
```
```
bower install
```
```
composer install
```

Run grunt to compile LESS to CSS, concatenate and validate JS.

```
grunt dev
``` 

## Deployment Process

From the project folder on a local machine 

```
bundle exec cap staging deploy
```

```
bundle exec cap production deploy
```

## Not Included

Wordpress files and vendor files are not contained in this repository, they are managed separately via Composer in each environment.

None of `composer install`, `bower install`, `npm install`, `grunt` commands are currently run automatically during a Capistrano deployment. New gems would need to be added to the project Gemfile.


## Installing Plugins

All Wordpress plugins are treated as dependencies and are managed by Composer. See [wpackagist.org] for more information on discovering and installing plugins with Composer.

## Domain Registration

The domain [barpx.com] (href="http://barpx.com") is registered by **Meshelle Armstrong** at [Dreamhost] (http://www.dreamhost.com) and expires on 2015-06-12.

**staging.barpx.com** has been created for use as a testing environment.

## Hosting

All web files and database files are hosted on Dreamhost VPS ps357091.

## SSH Access

To ssh into the server as root:
```
ssh root@ps357091.dreamhostps.com
```

Users that currently exist:
* egfg
* egfg1
* mitdeploy
* pxstagedeploy

## Server Folder Structure


```
├── bin
├── dev
├── etc
├── lib
├── lib64
├── mnt
├── proc
├── sbin
├── srv
│   ├── cvs
├── tmp
├── var
│   ├── backups
│   ├── lib
│   ├── lock
│   ├── mail
│   ├── opt
│   ├── spool
│   ├── cache
│   ├── local
│   ├── log
│   ├── mod_pagespeed
│   ├── run
│   ├── tmp
├── boot
├── dh
├── home
│   ├── _domain_logs
│   ├── egfg
│   │   ├── Maildir
│   │   ├── domains
│   │   │   ├── staging.barpx.com
│   │   │   ├── staging.bartnt.com
│   │   ├── logs
│   ├── egfg1
│   │   ├── Maildir
│   │   ├── domains
│   │   │   ├── barpx.com
│   │   │   ├── bartnt.com
│   │   │   ├── myirishtable.com
│   │   │   ├── staging.myirishtable.com
│   │   ├── logs
│   ├── ftp
│   ├── mitdeploy
│   │   ├── Maildir
│   │   ├── logs
│   ├── pxstagedeploy
│   │   ├── Maildir
│   │   ├── domains
│   │   │   ├── staging.barpx.com
│   │   ├── logs
│   ├── root
│   ├── tmp
│   │   ├── barpx
├── lib32
├── media
├── opt
├── root
├── selinux
├── sys
├── usr
```


