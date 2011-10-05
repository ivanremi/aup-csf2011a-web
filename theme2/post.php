<?php
	$connection=new Mongo();
	$db=$connection->csf;
	
	//save_data
	$db->iranlist->save($_POST);
	
?>

<h1>Entries</h1>
<?php foreach($db->iranlist->find() as $entry):?>
	<?php echo $entry['firstname'];?><br/ >
<?endforeach?>

