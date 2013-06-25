<?php //debug($curso) ?>

<div class="row-fluid">
	<div class="span12">
		<h2>Curso: <?php echo $curso['Curso']['name'] ?></h2>
	</div>
</div>
<div class="row-fluid">
	<div class="span12">
		<?php foreach ($curso['Clase'] as $clase): ?>
			<dl class="dl-horizontal">
				<dt>
					<?php echo $this->Html->link(h($clase['name']), array('controller'=>'clases', 'action' => 'ver', $clase['id'])) ?>
				</dt>
				<dd>
					<?php echo h($clase['description']) ?>
				</dd>
			</dl>
		<?php endforeach; ?>
	</div>
</div>

<!-- 
<div class="cursos view">
<h2><?php  echo __('Curso');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($curso['Curso']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($curso['Curso']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($curso['Curso']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($curso['Curso']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($curso['Curso']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Curso'), array('action' => 'edit', $curso['Curso']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Curso'), array('action' => 'delete', $curso['Curso']['id']), null, __('Are you sure you want to delete # %s?', $curso['Curso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clases'), array('controller' => 'clases', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clase'), array('controller' => 'clases', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Clases');?></h3>
	<?php if (!empty($curso['Clase'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Curso Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($curso['Clase'] as $clase): ?>
		<tr>
			<td><?php echo $clase['id'];?></td>
			<td><?php echo $clase['name'];?></td>
			<td><?php echo $clase['description'];?></td>
			<td><?php echo $clase['created'];?></td>
			<td><?php echo $clase['modified'];?></td>
			<td><?php echo $clase['curso_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'clases', 'action' => 'view', $clase['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'clases', 'action' => 'edit', $clase['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'clases', 'action' => 'delete', $clase['id']), null, __('Are you sure you want to delete # %s?', $clase['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Clase'), array('controller' => 'clases', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div> -->
