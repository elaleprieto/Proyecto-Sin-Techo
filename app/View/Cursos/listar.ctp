<?php debug($cursos) ?>

<div class="row-fluid">
	<div class="span12">
		<h2>Cursos</h2>
	</div>
</div>
<div class="row-fluid">
	<div class="span12">
		<?php foreach ($cursos as $curso): ?>
			<dl class="dl-horizontal">
				<dt>
					<?php echo $this->Html->link(h($curso['Curso']['name']), array('action' => 'ver', $curso['Curso']['id'])) ?>
				</dt>
				<dd>
					<?php echo h($curso['Curso']['description']) ?>
				</dd>
			</dl>
		<?php endforeach; ?>
	</div>
</div>
	
	
	<!-- <tr> -->
		<!-- <td>&nbsp;</td> -->
		<!-- <td><?php echo h($curso['Curso']['name']); ?>&nbsp;</td> -->
		<!-- <td><?php echo h($curso['Curso']['created']); ?>&nbsp;</td>
		<td><?php echo h($curso['Curso']['modified']); ?>&nbsp;</td> -->
		<!-- <td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $curso['Curso']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $curso['Curso']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $curso['Curso']['id']), null, __('Are you sure you want to delete # %s?', $curso['Curso']['id'])); ?>
		</td> -->
	<!-- </tr> -->
	<!-- </table> -->
	<!-- <p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p> -->

	<!-- <div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div> -->
<!-- </div> -->
<!-- <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Curso'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clases'), array('controller' => 'clases', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clase'), array('controller' => 'clases', 'action' => 'add')); ?> </li>
	</ul>
</div> -->
