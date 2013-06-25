<div class="profesores view">
<h2><?php  echo __('Profesor');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($profesor['Profesor']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($profesor['Profesor']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($profesor['Profesor']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($profesor['User']['name'], array('controller' => 'users', 'action' => 'view', $profesor['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Profesor'), array('action' => 'edit', $profesor['Profesor']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Profesor'), array('action' => 'delete', $profesor['Profesor']['id']), null, __('Are you sure you want to delete # %s?', $profesor['Profesor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Profesores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profesor'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Cursos');?></h3>
	<?php if (!empty($profesor['Curso'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Profesor Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($profesor['Curso'] as $curso): ?>
		<tr>
			<td><?php echo $curso['id'];?></td>
			<td><?php echo $curso['name'];?></td>
			<td><?php echo $curso['description'];?></td>
			<td><?php echo $curso['created'];?></td>
			<td><?php echo $curso['modified'];?></td>
			<td><?php echo $curso['profesor_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cursos', 'action' => 'view', $curso['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cursos', 'action' => 'edit', $curso['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cursos', 'action' => 'delete', $curso['id']), null, __('Are you sure you want to delete # %s?', $curso['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
