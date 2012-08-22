<div class="subelements view">
<h2><?php  echo __('Subelement'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($subelement['Subelement']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subelement Name'); ?></dt>
		<dd>
			<?php echo h($subelement['Subelement']['subelement_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subelement'), array('action' => 'edit', $subelement['Subelement']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Subelement'), array('action' => 'delete', $subelement['Subelement']['id']), null, __('Are you sure you want to delete # %s?', $subelement['Subelement']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Subelements'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subelement'), array('action' => 'add')); ?> </li>
	</ul>
</div>
