<?php 
	$title = "Safari Express";
	$conn = new DatabaseTable('vehicle');
	$allVec=$conn->findAllVec();
	$vectype=$conn->findVecSale();
	$newuser=$conn->registeredmonth();

	if(isset($_GET['vid'])){
	$conn2 = new DatabaseTable('vehiclecategory');

	$val = array(
			"vehicleID"=>$_GET['vid'],
			"category"=>"premium"
		);

		$conn2->update($val,"vehicleID");

		header('location:index.php?page=dashboard');


	}

	if(isset($_GET['rvid'])){
	$conn2 = new DatabaseTable('vehiclecategory');

	$val = array(
			"vehicleID"=>$_GET['rvid'],
			"category"=>"normal"
		);

		$conn2->update($val,"vehicleID");

		header('location:index.php?page=dashboard');


	}

	$content = loadTemplate('../templates/admin/dashboardTemplate.php', ['allVec'=>$allVec, 'vectype'=>$vectype,'newuser'=>$newuser]);//load template 
?>