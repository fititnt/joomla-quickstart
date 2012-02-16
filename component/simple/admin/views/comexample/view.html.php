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

class ComExampleViewComExample extends JView {

	/**
	 * Prepare the view
	 *  
	 * @param string $tpl Template que deve ser exibido
	 * @return void 
	 */
	public function display($tpl = null) {
		// get the Data
		$form = $this->get('Form');
		$item = $this->get('Item');

		// Assign the Data
		$this->form = $form;
		$this->item = $item;

		// Set the toolbar
		$this->addToolBar();

		// Display the template
		parent::display($tpl);

		// Set the document
		$this->setDocument();
	}

	protected function addToolBar() {
		JRequest::setVar('hidemainmenu', true);
		$isNew = ($this->item->id == 0);
		$user = JFactory::getUser();
		$userId = $user->id;
		$canDo = ComExampleHelper::getActions($this->item->id);
		JToolBarHelper::title($isNew ? JText::_('COM_COMEXAMPLE_MANAGER_COMEXAMPLE_NEW') : JText::_('COM_COMEXAMPLE_MANAGER_COMEXAMPLE_EDIT'), 'generic.png');
		// Built the actions for new and existing records.
		if ($isNew) {
			// For new records, check the create permission.
			if ($canDo->get('core.create')) {
				JToolBarHelper::apply('comexample.apply', 'JTOOLBAR_APPLY');
				JToolBarHelper::save('comexample.save', 'JTOOLBAR_SAVE');
				JToolBarHelper::custom('comexample.save2new', 'save-new.png', 'save-new_f2.png', 'JTOOLBAR_SAVE_AND_NEW', false);
			}
			JToolBarHelper::cancel('comexample.cancel', 'JTOOLBAR_CANCEL');
		} else {
			if ($canDo->get('core.edit')) {
				// We can save the new record
				JToolBarHelper::apply('comexample.apply', 'JTOOLBAR_APPLY');
				JToolBarHelper::save('comexample.save', 'JTOOLBAR_SAVE');

				// We can save this record, but check the create permission to see if we can return to make a new one.
				if ($canDo->get('core.create')) {
					JToolBarHelper::custom('comexample.save2new', 'save-new.png', 'save-new_f2.png', 'JTOOLBAR_SAVE_AND_NEW', false);
				}
			}
			if ($canDo->get('core.create')) {
				JToolBarHelper::custom('comexample.save2copy', 'save-copy.png', 'save-copy_f2.png', 'JTOOLBAR_SAVE_AS_COPY', false);
			}
			JToolBarHelper::cancel('comexample.cancel', 'JTOOLBAR_CLOSE');
		}
	}

	protected function setDocument() {
		$document = JFactory::getDocument();
		if ($this->item->id > 0) {
			$document->setTitle(JText::_('COM_COMEXAMPLE_COMEXAMPLE_CREATING'));
		} else {
			$document->setTitle(JText::_('COM_COMEXAMPLE_COMEXAMPLE_EDITING'));
		}
	}

}
