<?php
/**
 * li3_markdown: lithium port to PHP Markdown for parsing markdown markup into HTML.
 *
 * @copyright     Copyright 2011, Tobias Sandelius (http://sandelius.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */

/**
 * Include PHP Markdown class file
 */
if (!class_exists('Markdown_Parser', false)) {
    require_once dirname(__DIR__) . '/vendors/PHPMarkdown/markdown.php';
}