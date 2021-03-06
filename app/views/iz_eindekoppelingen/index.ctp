<?php echo $this->element('iz_subnavigation'); ?>
<?php echo $this->element('iz_beheer_subnavigation'); ?>
<?php 
		$wrench = $html->image('add.png');
		$url = array('action' => 'add');
		$opts = array('escape' => false, 'title' => __('add', true));
		echo $html->link($wrench, $url, $opts);
		echo $this->Html->link(__('Nieuwe einde koppeling', true), array('action' => 'add'));
?>
<div class="izEindekoppelingen ">
	<h2><?php __('Iz Eindekoppelingen');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('naam');?></th>
			<th><?php echo $this->Paginator->sort('Actief', 'active');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($izEindekoppelingen as $izEindekoppeling):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $izEindekoppeling['IzEindekoppeling']['naam']; ?>&nbsp;</td>
		<td><?php echo !empty($izEindekoppeling['IzEindekoppeling']['active']) ? "Ja" : "Nee"; ?>&nbsp;</td>
		<td class="actions">
			<?php 
				$wrench = $html->image('wrench.png');
				$url = array('action' => 'edit', $izEindekoppeling['IzEindekoppeling']['id']);
				$opts = array('escape' => false, 'title' => __('edit', true));
				echo $html->link($wrench, $url, $opts);
			?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => 'Pagina %page% van %pages%, met %current% records van %count% totaal, beginnend op record %start%, eindigend op %end%',
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
	 |	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
