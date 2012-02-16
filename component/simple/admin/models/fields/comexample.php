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

jimport('joomla.form.helper');

JFormHelper::loadFieldClass('list');

class JFormFieldComExample extends JFormFieldList
{
	protected $type = 'ComExample';

	protected function getOptions() 
	{
		$db = JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->select('a.id as id, a.examplefield as examplefield, b.title as category, b.id as catid');
		$query->from('#__comexample a');
		$query->leftJoin('#__categories b on a.catid=b.id');
		$db->setQuery((string)$query);
		$messages = $db->loadObjectList();
		$options = array();
		if($messages){
			foreach($messages as $message){
				$options[] = JHtml::_('select.option', $message->id, 
					$message->examplefield . ($message->catid ? ' (' . $message->category . ')' : ''));
			}
		}
		$options = array_merge(parent::getOptions(), $options);
		return $options;
	}
}
