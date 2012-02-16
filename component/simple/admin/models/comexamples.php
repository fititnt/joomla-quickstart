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

jimport('joomla.application.component.modellist');

class ComExampleModelComExamples extends JModelList
{
	/**
	 * Return one query object
	 * 
	 * @return object 
	 */
	protected function getListQuery() 
	{
		// Create a new query object.
		$db = JFactory::getDBO();
		$query = $db->getQuery(true);

		// Select some fields
		$query->select('id,examplefield');

		// From the comexample table
		$query->from('#__comexample');
		return $query;
	}
}
