<?php
/**
 * li3_markdown: lithium port to PHP Markdown for parsing markdown markup into HTML.
 *
 * @copyright     Copyright 2011, Tobias Sandelius (http://sandelius.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */
use lithium\util\String;
use \lithium\core\Libraries;
use \lithium\net\http\Media;
/**
 * Include PHP Markdown class file
 */
if (!class_exists('Markdown_Parser', false)) {
    require_once dirname(__DIR__) . '/vendors/PHPMarkdown/markdown.php';
}

Media::type( 'md', 'text/html', array(
	'view' => '\lithium\template\View',
	'renderer' => '\li3_markdown\template\view\adapter\Markdown',
	'loader' => '\li3_markdown\template\view\adapter\Markdown',
	'paths' => array(
		'template' => array(
			'{:library}/views/{:controller}/{:template}.{:type}.php',
			LITHIUM_APP_PATH . '/views/{:controller}/{:template}.{:type}.php'
		),
		'layout' => array(
			'{:library}/views/layouts/{:layout}.{:type}.php',
			LITHIUM_APP_PATH . '/views/layouts/{:layout}.{:type}.php'
		)
	)
));