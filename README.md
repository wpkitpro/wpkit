<p align="center">
<a href="https://github.com/gikwp/wpkit/tree/develop"><img alt="WpKit" src="https://gikwp.com/cdn/wpkit-theme-logo.svg" height="42" /></a>
</p>

<p align="center">
<a href="https://github.com/gikwp/wpkit/blob/develop/LICENSE.md"><img alt="wpkit" src="https://img.shields.io/github/license/gikwp/wpkit?color=%23525ddc&style=flat-square"></a>
<a href="https://github.com/gikwp/wpkit/releases"><img alt="wpkit" src="https://img.shields.io/github/release/gikwp/wpkit?color=%23525ddc&style=flat-square"></a>
</p>

## Sponsors

**GikWp** is an open source project and is completely free to use.

However, the amount of effort needed to support and develop new features and products within Gik cannot be sustained
without proper financial support. If you have the
opportunity, [consider sponsoring Gik](https://github.com/sponsors/gikwp)

<div align="center">
<a href="https://gikwp.com/"><img src="https://gikwp.com/cdn/gk-logo.svg" width="148" height="111" alt="Gik" /></a>
<a href="https://wordpress.com/"><img src="https://gikwp.com/cdn/wp-logo.svg" width="148" height="111" alt="Woop" /></a>
</div>

## Our projects

<div align="center">
<a href="https://github.com/gikwp/wpkit"><img src="https://gikwp.com/cdn/wk-logo.svg" width="148" height="111" alt="WpKit" /></a>
<a href="https://github.com/gikwp/corn"><img src="https://gikwp.com/cdn/cn-logo.svg" width="148" height="111" alt="Corn" /></a>
<a href="#"><img src="https://gikwp.com/cdn/wo-logo.svg" width="148" height="111" alt="Woop" /></a>
</div>

## Features

* Clean, efficient theme templating.
* **[Laravel Mix](https://laravel-mix.com/)** an elegant wrapper around Webpack for the 80% use case.
* Built-in the most popular and convenient CSS/JS framework **[Bootstrap](https://getbootstrap.com/)**.

## Requirements

* [WordPress](https://wordpress.org/) >= 5.9
* [PHP](https://www.php.net/manual/en/install.php) >= 7.4.0 (
  with [``php-mbstring``](https://www.php.net/manual/en/book.mbstring.php) enabled)
* [Composer](https://getcomposer.org/download/)
* [Node.js](https://nodejs.org/en/) >= 16
* [Yarn](https://classic.yarnpkg.com/en/docs/install#mac-stable)

## Packages

* [jQuery](https://jquery.com/): v3.5.1
* [Bootstrap](https://getbootstrap.com/): v5.3.0-alpha1
* [Popper](https://popper.js.org/): v2.11.6
* [Laravel Mix](https://laravel-mix.com/): v6.0.49

## Theme installation

Install WpKit using Composer from your WordPress themes directory (replace your-theme-name below with the name of your
theme):

``` 
# @ wp-content/themes/
$ git clone https://github.com/gikwp/wpkit.git your-theme-name
```

Don't forget **remove ``.git``**

```
# cd your-theme-name directory
$ rm -rf .git
```

To install the latest development version of WpKit, add ``dev-main`` to the end of the command:

``` 
$ git clone https://github.com/gikwp/wpkit.git dev-main
$ cd dev-main rm -rf .git
```

## Theme setup

Edit ```app/setup.php``` to enable or disable theme features, setup navigation menus, post thumbnail sizes, and
sidebars.

## Theme development

* Run ```yarn``` from the theme directory to install dependencies
* Update ```webpack.mix.js``` with your local dev URL

### Build commands

* ``yarn start`` — Compile assets when file changes are made, start Browsersync session
* ``yarn build`` — Compile and optimize the files in your assets directory
* ``yarn build:production`` — Compile assets for production

