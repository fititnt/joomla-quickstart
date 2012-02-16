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

?>
<h1>
	<?php echo $this->item->greeting; ?>
	<?php if($this->item->category && $this->item->params->get('show_category')): ?>
		<?php echo ' ('.$this->item->category.') '; ?>
	<?php endif; ?>
</h1>
