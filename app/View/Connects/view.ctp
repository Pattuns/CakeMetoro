<div class="connects view">
<h2><?php echo __('Connect'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($connect['Connect']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time Id'); ?></dt>
		<dd>
			<?php echo h($connect['Connect']['time_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station'); ?></dt>
		<dd>
			<?php echo h($connect['Connect']['station']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Arrive'); ?></dt>
		<dd>
			<?php echo h($connect['Connect']['arrive']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Depart'); ?></dt>
		<dd>
			<?php echo h($connect['Connect']['depart']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Connect'), array('action' => 'edit', $connect['Connect']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Connect'), array('action' => 'delete', $connect['Connect']['id']), null, __('Are you sure you want to delete # %s?', $connect['Connect']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Connects'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Connect'), array('action' => 'add')); ?> </li>
	</ul>
</div>
