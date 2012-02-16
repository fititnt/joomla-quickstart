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


class ComExampleHelper
{
	/**
	 * Add one subemu
	 * 
	 * @param string $submenu 
	 * @return void
	 */
	public static function addSubmenu($submenu) 
	{
		JSubMenuHelper::addEntry(JText::_('COM_COMEXAMPLE_SUBMENU_EXAMPLES'), 
			'index.php?option=com_comexample', $submenu == 'messages');
	}

	/**
	 * Get actions that user ca do it
	 *
	 * @param type $messageId
	 * @return object $result 
	 */
	public static function getActions($messageId = 0)
	{
		$user	= JFactory::getUser();
		$result	= new JObject;

		if (empty($messageId)) {
			$assetName = 'com_comexample';
		}
		else {
			$assetName = 'com_comexample.message.'.(int) $messageId;
		}

		$actions = array(
			'core.admin', 'core.manage', 'core.create', 'core.edit', 'core.delete'
		);

		foreach ($actions as $action) {
			$result->set($action,	$user->authorise($action, $assetName));
		}

		return $result;
	}
}
