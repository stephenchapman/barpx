# [Bar PX](http://www.barpx.com)

Bar PX is a speakeasy style bar in Alexandria, VA. This website is constructed using the Roots/Bedrock Wordpress stack, and is deployed using Capistrano. The production environment is a LAMP equiped Dreamhost VPS.

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

Run grunt to compile LESS to CSS, concatenate and validate JS.

```
grunt dev
```


## Not included

Wordpress files and vendor files are not contained in this repository, they are managed separately via Composer in each environment.


## Installing Plugins

All Wordpress plugins are treated as dependencies and are managed by Composer. See [wpackagist.org] for more information on discovering and installing plugins with Composer.
