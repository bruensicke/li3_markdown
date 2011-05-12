# li3_markdown
Lithium library for parsing markdown, uses [PHP Markdown](http://michelf.com/projects/php-markdown/).

## Usage:
To render the result within a template file simply call the `markdown` helper and run * display* method:
    <?=$this->markdown->display($markup) ?>