<?php
/**
 * li3_markdown: lithium port to PHP Markdown for parsing markdown markup into HTML.
 *
 * @copyright     Copyright 2011, Tobias Sandelius (http://sandelius.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

/**
 * Include the main `Markdown` class file.
 */
lithium\core\Libraries::add('PHPMarkdown', array(
    'path' => dirname(__DIR__) . '/libraries',
    'bootstrap' => 'PHPMarkdown/markdown.php',
));