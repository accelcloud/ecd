<?php
$tag=String::uuid();

?>
<div id="verslag<?= $tag?>">
<?php

$new= false;
if (empty($data)) {
	$new=true;
	$data=array('PfoVerslag' => array());
}
if (empty($data['PfoVerslag']['id'])) {
	$data['PfoVerslag']['id']=null;
}
if (empty($data['PfoVerslag']['id'])) {
	$data['PfoVerslag']['contact_type']='Telefonisch';
}
if (empty($data['PfoVerslag']['medewerker_id'])) {
	$data['PfoVerslag']['medewerker_id']=$this->Session->read('Auth.Medewerker.id');
}
if (empty($data['PfoVerslag']['verslag'])) {
	$data['PfoVerslag']['verslag']=null;
}

if (empty($data['PfoClientenVerslag'])) {
	$data['PfoClientenVerslag'] = array(
		array(
			'pfo_client_id' => $pfo_client['PfoClient']    ['id'],
		),
	);
}
$aanwezig = "";
foreach ($data['PfoClientenVerslag'] as $cp) {
	if (! empty($aanwezig)) {
		$aanwezig.=", ";
	}
	$aanwezig .= $clienten[$cp['pfo_client_id']];
}
?>
	<div id="view_verslag<?= $tag; ?>">
<?php 
if (!$new) {
	?>

	<h2>Verslag van <?= $date->show($data['PfoVerslag']['created'], array('short'=>true)); ?></h2>
	<p>Soort contact: <?= $data['PfoVerslag']['contact_type']?></p>
		<p>Medewerker: <?= $viewmedewerkers[$data['PfoVerslag']['medewerker_id']] ?></p>
		<p>Aanwezig: <?= $aanwezig; ?></p>
		<h4>Verslag:</h4>
		<p>
		<?= preg_replace('/\n/', '<br/>', h($data['PfoVerslag']['verslag'])) ?>
		</p>
		<div>&nbsp;</div>
		<?php 
		echo "<a id='toevoegen{$tag}' href='#' >Bewerk Verslag</a>\n";
} else {
	echo "<a id='toevoegen{$tag}' href='#' >Verslag toevoegen</a>\n";
}
	?>
	</div>
	<div style="display: none;" id='edit_verslag<?= $tag; ?>'>
	
	<?php
	if (!$new) {
		?>
	<legend>Verslag van <?= $data['PfoVerslag']['created']; ?></legend>
	<?php

	}

			echo $this->Form->create('PfoVerslag', array(
					'url' => array('action' => 'verslag', $data['PfoVerslag']['id']),
					'id' => 'form_verslag'.$tag,
			));
			if (!empty($data['PfoVerslag']['id'])) {
				echo $this->Form->hidden('id', array(
					'value' => $data['PfoVerslag']['id'],
				));
			}
			   echo $this->Form->hidden('pfo_client_id', array(
					'value' => $pfoClient['PfoClient']['id'],
			));
			echo $this->Form->hidden('medewerker_id', array(
				'value' => $data['PfoVerslag']['medewerker_id'],
			));
			echo $this->Form->input('contact_type', array(
				'type' => 'select',
				'options' => $contact_type,
				'value' => $data['PfoVerslag']['contact_type'],
			));

	$cnt=0;

	$options=array();
	foreach ($pfoClient['CompleteGroup'] as $id) {
		$options[$id] = $clienten[$id];
	}
	$selected = array($pfoClient['PfoClient']['id']);
	$cbtag="PfoClientenVerslagPfoClientId".$pfoClient['PfoClient']['id'];
	foreach ($data['PfoClientenVerslag'] as $cp) {
		$selected[] = $cp['pfo_client_id'];
	}

	echo $form->hidden('PfoClientenVerslag.pfo_current_client_id', array(
		'value' => $pfoClient['PfoClient']['id'],
	));
	echo $form->input('PfoClientenVerslag.pfo_client_id', array(
		'label' => 'Aanwezigen',
		'multiple' => 'checkbox',
		'options' => $options,
		'selected' => $selected,
	));

	echo $this->Form->input('PfoVerslag.verslag', array(
		'type' => 'textarea',
		'rows' => 15,
		'cols' => 110,
		'value' => $data['PfoVerslag']['verslag'],
	));

	$label = "Aanpassen";
	if ($new) {
		$label = 'Toevoegen';
	}
	echo $this->Form->button($label, array(
		'id' => 'verslag_save'.$tag,
		'type' => 'button',
	));
	echo $this->Form->button('cancel', array(
		'id' => 'verslag_cancel'.$tag,
		'type' => 'button',
	));
	echo $this->Form->end();
	 $url=$this->Html->url(
		array(
			'controller' => 'pfo_verslagen',
			'action' => 'verslag',
			$data['PfoVerslag']['id'],
		)
	);
	$this->Js->buffer("$('#edit_verslag{$tag}').find('#{$cbtag}').attr('disabled',true);");
	$this->Js->buffer("Ecd.verslag('{$tag}','{$url}');");
	?>
	</div>
</div>
<div>&nbsp;</div>
