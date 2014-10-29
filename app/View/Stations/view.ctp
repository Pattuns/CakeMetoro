<div class="stations view">
<h2><?php echo __('Station'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($station['Station']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($station['Station']['title']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Station'), array('action' => 'edit', $station['Station']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Station'), array('action' => 'delete', $station['Station']['id']), null, __('Are you sure you want to delete # %s?', $station['Station']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Stations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Station'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Places'), array('controller' => 'places', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Place'), array('controller' => 'places', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Places'); ?></h3>
	<?php if (!empty($station['Place'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $station['Place']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Urn Id'); ?></dt>
		<dd>
	<?php echo $station['Place']['urn_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Station Id'); ?></dt>
		<dd>
	<?php echo $station['Place']['station_id']; ?>
&nbsp;</dd>
		<dt><?php echo __('SameAs'); ?></dt>
		<dd>
	<?php echo $station['Place']['sameAs']; ?>
&nbsp;</dd>
		<dt><?php echo __('Lon'); ?></dt>
		<dd>
	<?php echo $station['Place']['lon']; ?>
&nbsp;</dd>
		<dt><?php echo __('Lat'); ?></dt>
		<dd>
	<?php echo $station['Place']['lat']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Place'), array('controller' => 'places', 'action' => 'edit', $station['Place']['id'])); ?></li>
			</ul>
		</div>
	</div>
	