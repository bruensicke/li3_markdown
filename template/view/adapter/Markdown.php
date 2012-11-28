<?php

namespace li3_markdown\template\view\adapter;

use lithium\template\Helper;
use lithium\core\Libraries;
use lithium\core\Environment;
use lithium\template\TemplateException;
use lithium\util\String;
use \lithium\net\http\Media;

class Markdown extends \lithium\template\view\adapter\File {

	public function render($template, $data = array(), array $options = array()) {

		$defaults = array('context' => array());
		$options += $defaults;

		$this->_context = $options['context'] + $this->_context;
		$this->_data = (array) $data + $this->_vars;
		$template__ = $template;
		unset($template, $defaults, $data);

		if ($this->_config['extract']) {
			extract($this->_data, EXTR_OVERWRITE);
		} elseif ($this->_view) {
			extract((array) $this->_view->outputFilters, EXTR_OVERWRITE);
		}

		ob_start();
		include $template__;
		$content = ob_get_clean();

		$_type = $this->getType($template__);

		return ($_type == 'md') ? Markdown($content) : $content;

	}

	/**
	 * Get the template type from a file path
	 * there HAS to be a better way to smarty select a renderer
	 * @param  [type] $path [description]
	 * @return [type]       [description]
	 */
	protected function getType($path){

		$file = explode('/', $path);
		$file = array_pop($file);

		// get the type from a cache file
		if(preg_match("/^template/", $file)){
			$file = explode('_', $file);
			$file = $file[3];
		}

		$type = explode('.', $file);
		$type = $type[1];

		return $type;
	}

	/**
	 * Searches one or more path templates for a matching template file, and returns the file name.
	 * Falls back to `html` template if `md` doesn't exist.
	 * This is the only way I've been able to use both file formats
	 *
	 * @param string $type
	 * @param array $params The set of options keys to be interpolated into the path templates
	 *              when searching for the correct file to load.
	 * @return string Returns the first template file found. Throws an exception if no templates
	 *         are available.
	 */
	protected function _paths($type, array $params) {

		// fall back to html if 'md' isn't present
		$_types = array($params['type'], 'html');

		foreach($_types as $_type){

			// Set the type to check
			// starts with the current renderer: `md`, falls back to `html`
			$params['type'] = $_type;

			if (!isset($this->_paths[$type])) {
				throw new TemplateException("Invalid template type '{$type}'.");
			}

			foreach ((array) $this->_paths[$type] as $path) {

				if (!file_exists($path = String::insert($path, $params))) {
					continue;
				}
				return $path;
			}
		
		}

		// didn't find any templates, throw exception
		throw new TemplateException("Template not found at path `{$path}`.");

	}


}

?>
