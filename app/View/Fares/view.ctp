<div class="fares view">
<h2><?php echo __('Fare'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($fare['Fare']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station 0'); ?></dt>
		<dd>
			<?php echo h($fare['Fare']['station_0']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Station 1'); ?></dt>
		<dd>
			<?php echo h($fare['Fare']['station_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fare'); ?></dt>
		<dd>
			<?php echo h($fare['Fare']['fare']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Child Fare'); ?></dt>
		<dd>
			<?php echo h($fare['Fare']['child_fare']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card Fare'); ?></dt>
		<dd>
			<?php echo h($fare['Fare']['card_fare']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Child Card Fare'); ?></dt>
		<dd>
			<?php echo h($fare['Fare']['child_card_fare']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Fare'), array('action' => 'edit', $fare['Fare']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Fare'), array('action' => 'delete', $fare['Fare']['id']), null, __('Are you sure you want to delete # %s?', $fare['Fare']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Fares'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fare'), array('action' => 'add')); ?> </li>
	</ul>
</div>
