<?php

/*
 * @package         {packagename}
 * @author          {authorname}
 * @version         {version}
 * @copyright       {copyright}
 * @license         {license}
 * 
 * @note            Startup based on https://github.com/fititnt/joomla-quickstart
 */
defined('_JEXEC') or die;

jimport('joomla.application.component.controller');

class ComExampleController extends JController
{
	function display($cachable = false) 
	{
		// Set default view if not set
		JRequest::setVar('view', JRequest::getCmd('view', 'ComExamples'));
		
		parent::display($cachable);
		
		// Add submenu
		ComExampleHelper::addSubmenu('messages');
	}
}
