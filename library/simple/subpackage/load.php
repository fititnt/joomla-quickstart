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

class LoadSubpackage {
    
    /*
     *  @todo: add some description here. 
     */
    public static function getInstance() 
    {
        require_once 'subpackage.php';
        $instance = new LibexampleSubpackage;
        return $instance;
    }

}