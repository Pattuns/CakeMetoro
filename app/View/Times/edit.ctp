<div class="times form">
<?php echo $this->Form->create('Time'); ?>
	<fieldset>
		<legend><?php echo __('Edit Time'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('type');
		echo $this->Form->input('now');
		echo $this->Form->input('depart');
		echo $this->Form->input('arrive');
		echo $this->Form->input('spend');
		echo $this->Form->input('depart_station');
		echo $this->Form->input('arrive_station');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Time.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Time.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Times'), array('action' => 'index')); ?></li>
	</ul>
</div>
