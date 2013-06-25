<div class="alumnosCursos index">
	<h2><?php echo __('Alumnos Cursos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('alumno_id');?></th>
			<th><?php echo $this->Paginator->sort('curso_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($alumnosCursos as $alumnosCurso): ?>
	<tr>
		<td><?php echo h($alumnosCurso['AlumnosCurso']['id']); ?>&nbsp;</td>
		<td><?php echo h($alumnosCurso['AlumnosCurso']['created']); ?>&nbsp;</td>
		<td><?php echo h($alumnosCurso['AlumnosCurso']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($alumnosCurso['Alumno']['id'], array('controller' => 'alumnos', 'action' => 'view', $alumnosCurso['Alumno']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($alumnosCurso['Curso']['name'], array('controller' => 'cursos', 'action' => 'view', $alumnosCurso['Curso']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $alumnosCurso['AlumnosCurso']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $alumnosCurso['AlumnosCurso']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $alumnosCurso['AlumnosCurso']['id']), null, __('Are you sure you want to delete # %s?', $alumnosCurso['AlumnosCurso']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Alumnos Curso'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
	</ul>
</div>
