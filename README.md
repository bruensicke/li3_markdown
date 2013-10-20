# Markdown parser for [Lithium PHP](http://lithify.me)
Lithium library for parsing markdown, uses [PHP Markdown Extra Extended](https://github.com/egil/php-markdown-extra-extended).

PHP Markdown Extra version: `1.2.4`

## Installation

### Use Composer

__Best Option__

Modify your projects `composer.json` file

~~~ json
{
    "require": {
    	...
        "bruensicke/li3_markdown": "master"
        ...
    }
}
~~~

Run `php composer.phar install` (or `php composer.phar update`) and, aside from adding it to your Libraries, you should be good to go.

### Submodule or Clone

> Select one of the following

Clone/Download the plugin into your app's ``libraries`` directory.

__Submodule__

From your `app` directory:

	git submodule add git://github.com/bruensicke/li3_markdown.git libraries/li3_markdown

__Clone__

From your `app/libraries` directory:

	git clone git://github.com/bruensicke/li3_markdown.git


## Usage:
To enable the library add the following line at the end of `app/config/bootstrap/libraries.php`:

    Libraries::add('li3_markdown');

### Markdown Views

To parse an entire view with markdown simply name your template something similar to:

~~~
view_name.md.php
~~~

the renderer will see that it's a markdown template and render it, otherwise it will render it like normal.

### Selective Rendering

> This is a helper method that allows you to selectively render text thru the markdown parser.
To render the result within a template file simply call the `markdown` helper and run `display`:

    <?php echo $this->markdown->render($markup) ?>

## Installation

Add a submodule to your li3 libraries:

	git submodule add git@github.com:bruensicke/li3_markdown.git libraries/li3_markdown

and activate it in you app (config/bootstrap/libraries.php), of course:

	Libraries::add('li3_markdown');

## Collaborate
As always, I welcome your collaboration to make things "even more betterer", so fork and contribute if you feel the need.

## Credits

* [li3](http://www.lithify.me)
* [joseym/li3_markdown](https://github.com/joseym/li3_markdown)
* [sandelius/li3_markdown](https://github.com/sandelius/li3_markdown)

Please report any bug, here: https://github.com/bruensicke/li3_markdown/issues

