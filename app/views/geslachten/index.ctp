<div class="geslachten index">
	<h2><?php __('Geslachten');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('afkorting');?></th>
			<th><?php echo $this->Paginator->sort('volledig');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($geslachten as $geslacht):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $geslacht['Geslacht']['id']; ?>&nbsp;</td>
		<td><?php echo $geslacht['Geslacht']['afkorting']; ?>&nbsp;</td>
		<td><?php echo $geslacht['Geslacht']['volledig']; ?>&nbsp;</td>
		<td><?php echo $geslacht['Geslacht']['created']; ?>&nbsp;</td>
		<td><?php echo $geslacht['Geslacht']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $geslacht['Geslacht']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $geslacht['Geslacht']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $geslacht['Geslacht']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $geslacht['Geslacht']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true),
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
	 |	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Geslacht', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Admin', true), array('controller' => 'Admin', 'action' => 'edit_models')); ?> </li>
	</ul>
</div>
