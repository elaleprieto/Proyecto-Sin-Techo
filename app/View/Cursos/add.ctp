<div class="cursos form">
<?php echo $this->Form->create('Curso');?>
	<fieldset>
		<legend><?php echo __('Add Curso'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cursos'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Clases'), array('controller' => 'clases', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clase'), array('controller' => 'clases', 'action' => 'add')); ?> </li>
	</ul>
</div>
