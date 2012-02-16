<?php

/*
 * @package         {packagename}
 * @subpackage      {subpackage}
 * @author          {authorname}
 * @version         {version}
 * @copyright       {copyright}
 * @license         {license}
 * 
 * @see https://github.com/fititnt/joomla-quickstart
 */
defined('JPATH_PLATFORM') or die;

/**
 * Fluent interface class
 * More info about this class can be read on Class Fluent Interface template
 * 
 * @see http://en.wikipedia.org/wiki/Fluent_interface
 * @see https://github.com/fititnt/template/tree/master/php/class-fluent-interface
 * 
 */
class LibxampleSubpackage {

	/**
	 * @var Mixed Generic mixed variable description
	 */
	private $variable;

	/**
	 * @var Mixed Generic mixed variable description
	 */
	public $public;

	/**
	 * @var Integer Generic integer variable description
	 */
	private $integer;

	/**
	 * @var String Generic string variable description
	 */
	private $string;

	/**
	 * @var Array Generic array variable description
	 */
	private $array;

	/**
	 * Initialize values
	 */
	public function __construct() {
		$this->public = '__construct() started value of $public var';
	}

	/**
	 * Close execution 
	 */
	public function __destruct() {
		//print "\nClassFluentInterface called __destruct()\n";
	}

	/**
	 * Delete (set to NULL) generic variable
	 * 
	 * @param String $name: name of var do delete
	 * @return Object $this
	 */
	public function del($name) {
		$this->$name = NULL;
		return $this;
	}

	/**
	 * Return generic variable
	 * 
	 * @param String $name: name of var to return
	 * @return Mixed this->$name: value of var
	 */
	public function get($name) {
		return $this->$name;
	}

	/**
	 * Set one generic variable the desired value
	 * 
	 * @param String $name: name of var to set value
	 * @param Mixed $value: value to set to desired variable
	 * @return Object $this
	 */
	public function set($name, $value) {
		$this->$name = $value;
		return $this;
	}

	/**
	 * Method to debug one class from inside
	 * 
	 * @see github.com/fititnt/php-snippet/tree/master/dump
	 * 
	 * @param array $option Whoe function must work
	 * 						$option['method'] = 'default':
	 * 							Return simple print_r() inside <pre>
	 * 						$option['method'] = 'console':
	 * 							Return values on javascript console of browsers
	 * 						$option['die'] = 1:
	 * 							If excecution must stop after excecution
	 * 
	 * @return Object $this Suport for method chaining
	 */
	public function debug($option = array()) {
		if (!isset($option['method'])) {
			$option['method'] = 'default';
		}
		switch ($option['method']) {
			case 'console':
				$html = array();
				$date = date("Y-m-d h:i:s");
				$html[] = '<script>';
				$html[] = 'console.groupCollapsed("' . __CLASS__ . ':' . $date . '");';
				//@todo: add separed group (fititnt, 2012-02-15 02:03)
				$html[] = 'console.groupCollapsed("$this");';
				$html[] = 'console.dir(eval(' . json_encode($this) . '));'; //evail is evil... And?
				$html[] = 'console.groupEnd()';
				$html[] = 'console.groupEnd()';
				$html[] = '</script>';
				echo implode(PHP_EOL, $html);
				break;
			case 'default':
			default:
				echo '<pre>';
				print_r($this);
				echo '</pre>';
				break;
		}
		if (isset($option['die'])) {
			die;
		}
		return $this;
	}

}

