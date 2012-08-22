<div class="years form">
<?php echo $this->Form->create('Year'); ?>
	<fieldset>
		<legend><?php echo __('Add Year'); ?></legend>
	<?php
		echo $this->Form->input('permission');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Years'), array('action' => 'index')); ?></li>
	</ul>
</div>
