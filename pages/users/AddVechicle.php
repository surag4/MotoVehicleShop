<?php
	$title = "Safari Express";
	$connToInsert = new DatabaseTable('vehicle');
	if(isset($_POST['submit'])){
	unset($_POST['submit']);
		$connToInsert-> insert($_POST);

	}

	$content = loadTemplate('../templates/users/AddVechicleTemplate.php', []);//load template
?>