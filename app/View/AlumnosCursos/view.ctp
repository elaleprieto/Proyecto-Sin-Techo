<div class="alumnosCursos view">
<h2><?php  echo __('Alumnos Curso');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($alumnosCurso['AlumnosCurso']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($alumnosCurso['AlumnosCurso']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($alumnosCurso['AlumnosCurso']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alumno'); ?></dt>
		<dd>
			<?php echo $this->Html->link($alumnosCurso['Alumno']['id'], array('controller' => 'alumnos', 'action' => 'view', $alumnosCurso['Alumno']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Curso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($alumnosCurso['Curso']['name'], array('controller' => 'cursos', 'action' => 'view', $alumnosCurso['Curso']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Alumnos Curso'), array('action' => 'edit', $alumnosCurso['AlumnosCurso']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Alumnos Curso'), array('action' => 'delete', $alumnosCurso['AlumnosCurso']['id']), null, __('Are you sure you want to delete # %s?', $alumnosCurso['AlumnosCurso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Alumnos Cursos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumnos Curso'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
	</ul>
</div>
