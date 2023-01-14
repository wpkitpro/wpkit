## WpKit

## Sponsors

___

**Gik** is an open source project and is completely free to use.

However, the amount of effort needed to support and develop new features and products within Gik cannot be sustained
without proper financial support. If you have the
opportunity, [consider sponsoring Gik](https://github.com/sponsors/gikwp)

<div align="center">
<a href="https://wordpress.com/"><img src="https://gikwp.com/cdn/wp-logo.svg" width="148" height="111" alt="Woop" /></a>
</div>

___

## Our projects

___
<div align="center">
<a href="https://gikwp.com/"><img src="https://gikwp.com/cdn/gk-logo.svg" width="148" height="111" alt="WpKit" /></a>
<a href="https://github.com/gikwp/wpkit"><img src="https://gikwp.com/cdn/wk-logo.svg" width="148" height="111" alt="WpKit" /></a>
<a href="#"><img src="https://gikwp.com/cdn/cn-logo.svg" width="148" height="111" alt="Corn" /></a>
<a href="#"><img src="https://gikwp.com/cdn/wo-logo.svg" width="148" height="111" alt="Woop" /></a>
</div>

## Theme installation
___
Install WpKit using Composer from your WordPress themes directory (replace your-theme-name below with the name of your
theme):

``` 
# @ wp-content/themes/
$ composer create-project gikwp/wpkit your-theme-name
```

To install the latest development version of WpKit, add dev-main to the end of the command:

``` 
$ composer require gikwp/wpkit dev-main
```

## Theme setup

___

Edit ```app/setup.php``` to enable or disable theme features, setup navigation menus, post thumbnail sizes, and
sidebars.

## Theme development

___

* Run ```yarn``` from the theme directory to install dependencies
* Update ```webpack.mix.js``` with your local dev URL

### Build commands 
* ``yarn start`` — Compile assets when file changes are made, start Browsersync session
* ``yarn build`` — Compile and optimize the files in your assets directory
* ``yarn build:production`` — Compile assets for production
