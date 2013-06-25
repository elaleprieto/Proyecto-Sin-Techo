<div class="row-fluid">
	<div class="span12">
		<?php
		$i = 1; 
		foreach ($pasos as $paso):
			if ($etapa['Etapa']['id'] > $paso['Etapa']['id']) {
				echo $this->Html->link('<span class="badge">'.$i++.'</span> ', array('action'=>'ver', $paso['Etapa']['id']), array('escape'=>FALSE));
			} elseif ($etapa['Etapa']['id'] == $paso['Etapa']['id']) {
				echo $this->Html->link('<span class="badge badge-success">'.$i++.'</span> ', array('action'=>'ver', $paso['Etapa']['id']), array('escape'=>FALSE));
			} else {
				echo $this->Html->link('<span class="badge badge-info">'.$i++.'</span> ', array('action'=>'ver', $paso['Etapa']['id']), array('escape'=>FALSE));
			}
		endforeach
		?>
	</div>
</div>
<div class="row-fluid">
	<div class="span12">
		<h2><?php echo $etapa['Etapa']['name'] ?></h2>
	</div>
</div>
<div class="row-fluid">
	<div class="span12">
		<?php echo $etapa['Etapa']['contenido'] ?>
	</div>
</div>
<div class="row-fluid">
	<div class="span6">
		<?php
		if($neighbors['prev'] != null)
			echo $this->Html->link('<i class="icon-chevron-left"></i>', array('action'=>'ver', $neighbors['prev']['Etapa']['id']), array('escape'=>FALSE))
		?>
	</div>
	<div class="span6 text-right">
		<?php
		if($neighbors['next'] != null)
			echo $this->Html->link('<i class="icon-chevron-right"></i>', array('action'=>'ver', $neighbors['next']['Etapa']['id']), array('escape'=>FALSE))
		?>
	</div>
</div>

<!-- <div class="etapas view">
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
			<?php echo h($etapa['Etapa']['orden']); ?>
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
</div> -->
