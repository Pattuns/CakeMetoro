<div class="stations form">
<?php echo $this->Form->create('Station'); ?>
	<fieldset>
		<legend><?php echo __('Edit Station'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Station.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Station.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Stations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Places'), array('controller' => 'places', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Place'), array('controller' => 'places', 'action' => 'add')); ?> </li>
	</ul>
</div>
