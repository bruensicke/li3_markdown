# li3_markdown

Lithium library for parsing markdown, uses [PHP Markdown Extra](http://michelf.com/projects/php-markdown/extra/).

PHP Markdown Extra version: `1.2.4`

## Usage

To render the result within a template file simply call the `markdown` helper and run `display`:

    <?php echo $this->markdown->display($markup) ?>

## Installation

Add a submodule to your li3 libraries:

	git submodule add git@github.com:bruensicke/li3_markdown.git libraries/li3_markdown

and activate it in you app (config/bootstrap/libraries.php), of course:

	Libraries::add('li3_markdown');

## Credits

* [li3](http://www.lithify.me)
* [sandelius/li3_markdown](https://github.com/sandelius/li3_markdown)

Please report any bug, here: https://github.com/bruensicke/li3_markdown/issues

