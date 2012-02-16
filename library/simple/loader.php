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

abstract class LibExample {

	/**
	 * LibxampleSubpackage Object
	 * @var object 
	 */
	public static $subpackage = null;

	/**
	 * Return LibxampleSubpackage Object, creating if aready doesent exists
	 */
	public static function getSubpackage() {
		if (!self::$subpackage) {
			jimport('libexample.subpackage.load');

			self::$subpackage = LoadSubpackage::getInstance();
		}
		return self::$subpackage;
	}

}
