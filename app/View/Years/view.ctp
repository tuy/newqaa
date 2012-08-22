<div class="years view">
<h2><?php  echo __('Year'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($year['Year']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Permission'); ?></dt>
		<dd>
			<?php echo h($year['Year']['permission']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Year'), array('action' => 'edit', $year['Year']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Year'), array('action' => 'delete', $year['Year']['id']), null, __('Are you sure you want to delete # %s?', $year['Year']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Years'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Year'), array('action' => 'add')); ?> </li>
	</ul>
</div>
