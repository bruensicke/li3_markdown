<?php

/**
 * Include the main `Markdown` class file.
 */
lithium\core\Libraries::add('PHPMarkdown', array(
    'path' => dirname(__DIR__) . '/libraries',
    'bootstrap' => 'PHPMarkdown/markdown.php',
));