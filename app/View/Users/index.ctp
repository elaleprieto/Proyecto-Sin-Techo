<div class="row-fluid">
	<div class="span10">
		<h2>Usuarios</h2>
		<table cellpadding="0" cellspacing="0">
			<tr>
					<th><?php echo $this->Paginator->sort('id'); ?></th>
					<th><?php echo $this->Paginator->sort('username', 'Usuario'); ?></th>
					<th><?php echo $this->Paginator->sort('password', 'Contraseña'); ?></th>
					<th><?php echo $this->Paginator->sort('name', 'Nombre'); ?></th>
					<th><?php echo $this->Paginator->sort('Rol.name', 'Rol'); ?></th>
					<th><?php echo $this->Paginator->sort('created', 'Creado'); ?></th>
					<th><?php echo $this->Paginator->sort('modified', 'Modificado'); ?></th>
					<th class="actions">Acciones</th>
			</tr>
			<?php foreach ($users as $user): ?>
			<tr>
				<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
				<td><?php echo h($user['Rol']['name']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
				<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link('Ver', array('action' => 'view', $user['User']['id'])); ?>
					<?php echo $this->Html->link('Editar', array('action' => 'edit', $user['User']['id'])); ?>
					<?php echo $this->Form->postLink('Eliminar', array('action' => 'delete', $user['User']['id']), null, '¿Estás seguro que deseas eliminar el usuario # %s?', $user['User']['id']); ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</table>
		<p>
			<?php
			echo $this->Paginator->counter(array(
			'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
			));
			?>
		</p>
		<div class="paging">
		<?php
			echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
			echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
		?>
		</div>
	</div>

	<div class="span2">
		<h3>Acciones</h3>
		<ul>
			<li><?php echo $this->Html->link('Nuevo Usuario', array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link('Listar Noticias', array('controller' => 'noticias', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link('Nueva Noticia', array('controller' => 'noticias', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
