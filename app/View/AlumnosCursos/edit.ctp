<div class="alumnosCursos form">
<?php echo $this->Form->create('AlumnosCurso');?>
	<fieldset>
		<legend><?php echo __('Edit Alumnos Curso'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('alumno_id');
		echo $this->Form->input('curso_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AlumnosCurso.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('AlumnosCurso.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Alumnos Cursos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Alumnos'), array('controller' => 'alumnos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Alumno'), array('controller' => 'alumnos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
	</ul>
</div>
