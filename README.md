WP Preview is a simple WordPress theme that allows you to stage flat website designs in a browser for demoing purposes.

Created by: [Stephen Greer](https://stephengreer.me/)

## Requirements

| Prerequisite    | How to check | How to install
| --------------- | ------------ | ------------- |
| PHP >= 5.4.x    | `php -v`     | [php.net](http://php.net/manual/en/install.php) |
| Node.js 0.12.x  | `node -v`    | [nodejs.org](http://nodejs.org/) |
| gulp >= 3.8.10  | `gulp -v`    | `npm install -g gulp` |
| Bower >= 1.3.12 | `bower -v`   | `npm install -g bower` |

For more installation notes, refer to the [Install gulp and Bower](#install-gulp-and-bower) section in this document.

## Features

* [gulp](http://gulpjs.com/) build script that compiles both Sass and Less, checks for JavaScript errors, optimizes images, and concatenates and minifies files

## Theme installation

Bottom line is you want to get the files in this repo into your local development environment. There are many ways to do this, two of which we will cover here.

### via Command-line

You need to clone this repo into the theme directory on your WordPress installation. Run this in the command-line.
`git clone https://github.com/stephengreer08/wp-preview`

### via WordPress Admin Panel

1. [Download the latest release](https://github.com/stephengreer08/wp-preview/releases/latest) of Sage.
2. In your WordPress admin panel, navigate to Appearance->Themes
3. Click Add New
4. Click Upload Theme
5. Upload the zip file that you downloaded.

### via WP Pusher

You can also install this theme, or any theme or plugin from Github using the WordPress plugin, [WP Pusher](https://wppusher.com/). It's free for public repos.
