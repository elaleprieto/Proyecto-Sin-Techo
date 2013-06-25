<div class="clases view">
<h2><?php  echo __('Clase');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($clase['Clase']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($clase['Clase']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($clase['Clase']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($clase['Clase']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($clase['Clase']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Curso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($clase['Curso']['name'], array('controller' => 'cursos', 'action' => 'view', $clase['Curso']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Clase'), array('action' => 'edit', $clase['Clase']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Clase'), array('action' => 'delete', $clase['Clase']['id']), null, __('Are you sure you want to delete # %s?', $clase['Clase']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clases'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clase'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Etapas'), array('controller' => 'etapas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etapa'), array('controller' => 'etapas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Etapas');?></h3>
	<?php if (!empty($clase['Etapa'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Clase Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($clase['Etapa'] as $etapa): ?>
		<tr>
			<td><?php echo $etapa['id'];?></td>
			<td><?php echo $etapa['name'];?></td>
			<td><?php echo $etapa['description'];?></td>
			<td><?php echo $etapa['created'];?></td>
			<td><?php echo $etapa['modified'];?></td>
			<td><?php echo $etapa['clase_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'etapas', 'action' => 'view', $etapa['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'etapas', 'action' => 'edit', $etapa['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'etapas', 'action' => 'delete', $etapa['id']), null, __('Are you sure you want to delete # %s?', $etapa['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Etapa'), array('controller' => 'etapas', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
