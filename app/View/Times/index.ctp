<div class="times index">
	<h2><?php echo __('Times'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('now'); ?></th>
			<th><?php echo $this->Paginator->sort('depart'); ?></th>
			<th><?php echo $this->Paginator->sort('arrive'); ?></th>
			<th><?php echo $this->Paginator->sort('spend'); ?></th>
			<th><?php echo $this->Paginator->sort('depart_station'); ?></th>
			<th><?php echo $this->Paginator->sort('arrive_station'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($times as $time): ?>
	<tr>
		<td><?php echo h($time['Time']['id']); ?>&nbsp;</td>
		<td><?php echo h($time['Time']['type']); ?>&nbsp;</td>
		<td><?php echo h($time['Time']['now']); ?>&nbsp;</td>
		<td><?php echo h($time['Time']['depart']); ?>&nbsp;</td>
		<td><?php echo h($time['Time']['arrive']); ?>&nbsp;</td>
		<td><?php echo h($time['Time']['spend']); ?>&nbsp;</td>
		<td><?php echo h($time['Time']['depart_station']); ?>&nbsp;</td>
		<td><?php echo h($time['Time']['arrive_station']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $time['Time']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $time['Time']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $time['Time']['id']), null, __('Are you sure you want to delete # %s?', $time['Time']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Time'), array('action' => 'add')); ?></li>
	</ul>
</div>
