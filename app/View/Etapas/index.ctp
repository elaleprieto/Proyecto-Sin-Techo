<div class="etapas index">
	<h2><?php echo __('Etapas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('contenido');?></th>
			<th><?php echo $this->Paginator->sort('orden');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('categoriaetapa_id');?></th>
			<th><?php echo $this->Paginator->sort('clase_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($etapas as $etapa): ?>
	<tr>
		<td><?php echo h($etapa['Etapa']['id']); ?>&nbsp;</td>
		<td><?php echo h($etapa['Etapa']['name']); ?>&nbsp;</td>
		<td><?php echo h($etapa['Etapa']['description']); ?>&nbsp;</td>
		<td><?php echo h($etapa['Etapa']['contenido']); ?>&nbsp;</td>
		<td><?php echo h($etapa['Etapa']['order']); ?>&nbsp;</td>
		<td><?php echo h($etapa['Etapa']['created']); ?>&nbsp;</td>
		<td><?php echo h($etapa['Etapa']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($etapa['Categoriaetapa']['name'], array('controller' => 'categoriaetapas', 'action' => 'view', $etapa['Categoriaetapa']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($etapa['Clase']['name'], array('controller' => 'clases', 'action' => 'view', $etapa['Clase']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $etapa['Etapa']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $etapa['Etapa']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $etapa['Etapa']['id']), null, __('Are you sure you want to delete # %s?', $etapa['Etapa']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Etapa'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Categoriaetapas'), array('controller' => 'categoriaetapas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoriaetapa'), array('controller' => 'categoriaetapas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clases'), array('controller' => 'clases', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clase'), array('controller' => 'clases', 'action' => 'add')); ?> </li>
	</ul>
</div>
