<div class="subelements form">
<?php echo $this->Form->create('Subelement'); ?>
	<fieldset>
		<legend><?php echo __('Add Subelement'); ?></legend>
	<?php
		echo $this->Form->input('subelement_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Subelements'), array('action' => 'index')); ?></li>
	</ul>
</div>
