<div class="times view">
<h2><?php echo __('Time'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($time['Time']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($time['Time']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Now'); ?></dt>
		<dd>
			<?php echo h($time['Time']['now']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Depart'); ?></dt>
		<dd>
			<?php echo h($time['Time']['depart']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Arrive'); ?></dt>
		<dd>
			<?php echo h($time['Time']['arrive']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Spend'); ?></dt>
		<dd>
			<?php echo h($time['Time']['spend']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Depart Station'); ?></dt>
		<dd>
			<?php echo h($time['Time']['depart_station']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Arrive Station'); ?></dt>
		<dd>
			<?php echo h($time['Time']['arrive_station']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Time'), array('action' => 'edit', $time['Time']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Time'), array('action' => 'delete', $time['Time']['id']), null, __('Are you sure you want to delete # %s?', $time['Time']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Times'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Time'), array('action' => 'add')); ?> </li>
	</ul>
</div>
