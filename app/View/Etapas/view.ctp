<div class="etapas view">
<h2><?php  echo __('Etapa');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($etapa['Etapa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($etapa['Etapa']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($etapa['Etapa']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contenido'); ?></dt>
		<dd>
			<?php echo h($etapa['Etapa']['contenido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Orden'); ?></dt>
		<dd>
			<?php echo h($etapa['Etapa']['order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($etapa['Etapa']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($etapa['Etapa']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoriaetapa'); ?></dt>
		<dd>
			<?php echo $this->Html->link($etapa['Categoriaetapa']['name'], array('controller' => 'categoriaetapas', 'action' => 'view', $etapa['Categoriaetapa']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clase'); ?></dt>
		<dd>
			<?php echo $this->Html->link($etapa['Clase']['name'], array('controller' => 'clases', 'action' => 'view', $etapa['Clase']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Etapa'), array('action' => 'edit', $etapa['Etapa']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Etapa'), array('action' => 'delete', $etapa['Etapa']['id']), null, __('Are you sure you want to delete # %s?', $etapa['Etapa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Etapas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Etapa'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categoriaetapas'), array('controller' => 'categoriaetapas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoriaetapa'), array('controller' => 'categoriaetapas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clases'), array('controller' => 'clases', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clase'), array('controller' => 'clases', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Next'), array( 'action' => 'view', $etapa['Etapa']['id']+1)); ?> </li>
	</ul>
</div>
