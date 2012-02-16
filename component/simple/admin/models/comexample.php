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

jimport('joomla.application.component.modeladmin');

class ComExampleModelComExample extends JModelAdmin {

	/**
	 * Extends method for getting the form from the model.
	 *
	 * @param   array    $data      Data for the form.
	 * @param   boolean  $loadData  True if the form is to load its own data (default case), false if not.
	 *
	 * @return  mixed  A JForm object on success, false on failure
	 *
	 * @since   11.1
	 */
	public function getForm($data = array(), $loadData = true) {
		// Get the form.
		$form = $this->loadForm('com_comexample.' . $this->name, $this->name, array('control' => 'jform', 'load_data' => $loadData));
		return $form;
	}

	/**
	 * Method to get the data that should be injected in the form.
	 *
	 * @return  array    The default data is an empty array.
	 *
	 * @since   11.1
	 */
	protected function loadFormData() {
		// Check the session for previously entered form data. for this form
		$data = JFactory::getApplication()->getUserState('com_comexample.edit.' . $this->name . '.data', array());
		if (empty($data)) {
			$data = $this->getItem();
		}
		return $data;
	}

	/**
	 * Method to get a table object, load it if necessary.
	 *
	 * @param   string  $name     The table name. Optional.
	 * @param   string  $prefix   The class prefix. Optional.
	 * @param   array   $options  Configuration array for model. Optional.
	 *
	 * @return  JTable  A JTable object
	 *
	 * @since   11.1
	 */
	public function getTable($name = '', $prefix = 'ComExampleTable', $options = array()) {
		return parent::getTable($name, $prefix, $options);
	}

	/**
	 * @todo Add description here (fititnt, 2012-02-16 04:55)
	 * 
	 * @param array $data
	 * @param string $key
	 * @return object 
	 */
	protected function allowEdit($data = array(), $key = 'id') {
		// Check specific edit permission then general edit permission.
		return JFactory::getUser()->authorise('core.edit', 'com_comexample.message.' . ((int) isset($data[$key]) ? $data[$key] : 0)) or parent::allowEdit($data, $key);
	}

}
