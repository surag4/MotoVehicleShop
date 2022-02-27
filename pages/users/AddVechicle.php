<?php
	$title = "Local Partners Pty Ltd";
	$connToInsert = new DatabaseTable('properties');
	
	if(isset($_POST['submit'])){
	unset($_POST['submit']);
		$connToInsert-> insert($_POST);

	}

	$content = loadTemplate('../templates/users/AddVechicleTemplate.php', []);//load template
?>