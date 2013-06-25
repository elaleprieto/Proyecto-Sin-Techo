<div class="clases form">
<?php echo $this->Form->create('Clase');?>
	<fieldset>
		<legend><?php echo __('Edit Clase'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('curso_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Clase.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Clase.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Clases'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Cursos'), array('controller' => 'cursos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curso'), array('controller' => 'cursos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Etapas'), array('controller' => 'etapas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etapa'), array('controller' => 'etapas', 'action' => 'add')); ?> </li>
	</ul>
</div>
