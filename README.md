# [Bar PX](http://www.barpx.com)

Bar PX is a speakeasy style bar in Alexandria, VA. This website is constructed using the Roots/Bedrock Wordpress stack, and is deployed using Capistrano. The production environment is a LAMP equiped Dreamhost VPS.

## Installation

To set up the development environment for this website, you'll need to install the following on your system:

* NPM
* Composer – Used to manage dependencies, including wordpress and all plugins.
* Capistrano – For automated deployments with a single line command.
* Bower
* Grunt
* Git
* PHP >= 5.3.2 (for Composer)
* Ruby >= 1.9 (for Capistrano)

See [Roots/Bedrock] (https://github.com/roots/bedrock) for detailed instructions on setting up a project.

## Not included

Wordpress files and vendor files are not contained in this repository, they are managed separately via Composer in each environment.
