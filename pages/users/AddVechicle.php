<?php
	$title = "Safari Express";
	$conn_brand = new DatabaseTable('manufacturer');
	$brands=$conn_brand->brandmodel();
    $brandlist=$conn_brand->findAll('manufacturer');
	$connToInsert = new DatabaseTable('vehicle');
	if(isset($_POST['submit'])){
	unset($_POST['submit']);
		$connToInsert-> insert($_POST);

	}

	$content = loadTemplate('../templates/users/AddVechicleTemplate.php', ['brands'=>$brands,'brandlist'=>$brandlist]);//load template
?>