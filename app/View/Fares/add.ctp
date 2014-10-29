<div class="fares form">
<?php echo $this->Form->create('Fare'); ?>
	<fieldset>
		<legend><?php echo __('Add Fare'); ?></legend>
	<?php
		echo $this->Form->input('station_0');
		echo $this->Form->input('station_1');
		echo $this->Form->input('fare');
		echo $this->Form->input('child_fare');
		echo $this->Form->input('card_fare');
		echo $this->Form->input('child_card_fare');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Fares'), array('action' => 'index')); ?></li>
	</ul>
</div>
