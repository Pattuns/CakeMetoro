<div class="apiKeys view">
<h2><?php echo __('Api Key'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($apiKey['ApiKey']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apikey'); ?></dt>
		<dd>
			<?php echo h($apiKey['ApiKey']['apikey']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Api Key'), array('action' => 'edit', $apiKey['ApiKey']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Api Key'), array('action' => 'delete', $apiKey['ApiKey']['id']), null, __('Are you sure you want to delete # %s?', $apiKey['ApiKey']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Api Keys'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Api Key'), array('action' => 'add')); ?> </li>
	</ul>
</div>
