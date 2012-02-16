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

jimport('joomla.application.component.view');

class ComExampleViewComExamples extends JView
{
	/**
	 * Prepare the view
	 *  
	 * @param string $tpl Template que deve ser exibido
	 * @return void 
	 */
	function display($tpl = null) 
	{
		// Get data from the model
		$items = $this->get('Items');
		$pagination = $this->get('Pagination');

		// Assign data to the view
		$this->items = $items;
		$this->pagination = $pagination;

		// Set the toolbar
		$this->addToolBar();

		// Display the template
		parent::display($tpl);

		// Set the document
		$this->setDocument();
	}

	/**
	 * Add toolbar to the view
	 * 
	 * @return void 
	 */
	protected function addToolBar() 
	{
		$canDo = ComExampleHelper::getActions();
		JToolBarHelper::title(JText::_('COM_COMEXAMPLE_MANAGER_COMEXAMPLES'), 'generic.png');
		if ($canDo->get('core.create')) 
		{
			JToolBarHelper::addNew('comexample.add', 'JTOOLBAR_NEW');
		}
		if ($canDo->get('core.edit')) 
		{
			JToolBarHelper::editList('comexample.edit', 'JTOOLBAR_EDIT');
		}
		if ($canDo->get('core.delete')) 
		{
			JToolBarHelper::deleteList('', 'comexamples.delete', 'JTOOLBAR_DELETE');
		}
		if ($canDo->get('core.admin')) 
		{
			JToolBarHelper::divider();
			JToolBarHelper::preferences('com_comexample');
		}
	}

	/**
	 * Add document properties
	 * 
	 * @return void 
	 */
	protected function setDocument() 
	{
		$document = JFactory::getDocument();
		$document->setTitle(JText::_('COM_COMEXAMPLE_ADMINISTRATION'));
	}
}
