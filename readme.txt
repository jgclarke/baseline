# Introduction

Baseline is a starter WordPress theme. That means it doesn't contain styling or advanced options; rather it's a collection of elements designed as a start point for building your own custom theme.

Thank you for downloading Baseline. Use it to build a great theme for your site.

# Features

* Responsive
* LESS CSS framework
* Lightweight, modern HTML and CSS
* Login page customizations
* Custom wp-config and wp-config-dev

# Credits

* Baseline is built on the following technologies:
** Underscores theme by Automattic - https://github.com/Automattic/_s
** HTML5 Boilerplate by H5BP - https://github.com/h5bp
** WordPress Skeleton by Mark Jaquith - https://github.com/markjaquith/WordPress-Skeleton

# Copyright and License

* Resources packed within the theme:
** LESS CSS by the LESS CSS team - http://lesscss.org/
— Released under the Apache 2 license.
** Modernizr by the Modernizr team - https://github.com/Modernizr/Modernizr
— Released under the MIT license.

* All other resources and theme elements are licensed under the GPL (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html), version 2 or later.

# Theme Usage

1. Give your theme its own name:
a. Search for 'baseline' (case sensitive) and replace it with an all-lowercase, no spaces version of your theme name (such as "this_amazing_theme", without the quotes).
b. Search for 'Baseline' (case sensitive) across all theme files and replace it with a "friendly" version of your theme name (such as "This Amazing Theme", without the quotes).
2. Use the '_site_root_files' to enhance your wp-config:
a. Move the 'wp-config.php' and 'wp-config-dev.php' files into the root of your WordPress install and customize them. Don't upload 'wp-config-dev.php' to your live/production environment — keep it in your local/development environment only.
b. Delete the empty '_site_root_files' directory.
3. Customize the default theme logo:
a. Replace the 'img/logo.png' with your own logo.
b. Edit the logo file height and width dimensions on lines 9 and 10 of 'inc/admin/login-config.php'. This ensures your custom logo is the right size on the register/sign-in screens.
4. As you're building your site, don't forget to:
a) Modify the editor window styles to match the site styles (in 'inc/admin/editor-style.less');
b) Modify the content width in 'inc/admin/login-config.php';
c) Customize the appearance/hiding of default widgets by editing 'inc/admin/remove-default-widgets.php'.
5. Further customize the theme to make it uniquely yours!