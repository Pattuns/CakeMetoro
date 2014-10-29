<div class="connects form">
<?php echo $this->Form->create('Connect'); ?>
	<fieldset>
		<legend><?php echo __('Add Connect'); ?></legend>
	<?php
		echo $this->Form->input('time_id');
		echo $this->Form->input('station');
		echo $this->Form->input('arrive');
		echo $this->Form->input('depart');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Connects'), array('action' => 'index')); ?></li>
	</ul>
</div>
