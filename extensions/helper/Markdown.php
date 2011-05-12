<?php
/**
 * li3_markdown: lithium port to PHP Markdown for parsing markdown markup into HTML.
 *
 * @copyright     Copyright 2011, Tobias Sandelius (http://sandelius.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

namespace li3_markdown\extensions\helper;

/**
 * The `Markdown` class helps us parse content with markdown syntax within template files.
 */
class Markdown extends \lithium\template\Helper {

    /**
     * Parse a string containing `markdown` markup syntax.
     *
     * @link http://michelf.com/projects/php-markdown/
     * @param string $string Content that we want to be parsed from `markdown` into `HTML`.
     * @return string `HTML` ready string.
     */
    public function display($string) {
        return Markdown($string);
    }
}