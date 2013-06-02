<div class="categoriaetapas view">
<h2><?php  echo __('Categoriaetapa');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($categoriaetapa['Categoriaetapa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($categoriaetapa['Categoriaetapa']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($categoriaetapa['Categoriaetapa']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($categoriaetapa['Categoriaetapa']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($categoriaetapa['Categoriaetapa']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Categoriaetapa'), array('action' => 'edit', $categoriaetapa['Categoriaetapa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Categoriaetapa'), array('action' => 'delete', $categoriaetapa['Categoriaetapa']['id']), null, __('Are you sure you want to delete # %s?', $categoriaetapa['Categoriaetapa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categoriaetapas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoriaetapa'), array('action' => 'add')); ?> </li>
	</ul>
</div>
