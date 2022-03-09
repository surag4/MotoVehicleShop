<?php 
	$title = "Safari Express";
	$conn = new DatabaseTable('properties');
	$allVec=$conn->findAllVec();

	if(isset($_GET['vid'])){
	$conn2 = new DatabaseTable('vehicle_category');

	$val = array(
			"vec_id"=>$_GET['vid'],
			"category"=>"premium"
		);

		$conn2->update($val,"vec_id");

		header('location:index.php?page=dashboard');


	}

	if(isset($_GET['rvid'])){
	$conn2 = new DatabaseTable('vehicle_category');

	$val = array(
			"vec_id"=>$_GET['vid'],
			"category"=>"normal"
		);

		$conn2->update($val,"vec_id");

		header('location:index.php?page=dashboard');


	}


	$content = loadTemplate('../templates/admin/dashboardTemplate.php', ['allVec'=>$allVec]);//load template 
?>