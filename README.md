# li3_markdown
Lithium library for parsing markdown, uses [PHP Markdown Extra](http://michelf.com/projects/php-markdown/extra/).

PHP Markdown Extra version: `1.2.4`

## Usage:
To enable the library add the following line at the end of `app/config/bootstrap/libraries.php`:

    Libraries::add('li3_markdown');

To render the result within a template file simply call the `markdown` helper and run `display`:

    <?php echo $this->markdown->display($markup) ?>