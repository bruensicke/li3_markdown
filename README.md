# Markdown parser for [Lithium PHP](http://lithify.me)
Lithium library for parsing markdown, uses [PHP Markdown Extra](http://michelf.com/projects/php-markdown/extra/).

PHP Markdown Extra version: `1.2.4`

## Installation

### Grab the Plugin

> Select one of the following

Clone/Download the plugin into your app's ``libraries`` directory.

__Submodule__

From your `app` directory:

	git submodule add git://github.com/joseym/li3_markdown.git libraries/li3_markdown

__Clone__

From your `app/libraries` directory:

	git clone git://github.com/joseym/li3_markdown.git


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

~~~ php
<?php echo $this->markdown->display($markup) ?>
~~~

## Collaborate
As always, I welcome your collaboration to make things "even more betterer", so fork and contribute if you feel the need.

## Credits

- Original plugin by [@sandelius](https://github.com/sandelius)