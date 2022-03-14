<?php 
	$title = "Safari Express";
	$data=[];
	$conn = new DatabaseTable('vehicle');
	$vehicle_id=0;
	if(isset($_GET['vid'])){
        $vehicle_id=$_GET['vid'];
		$data=$conn->findapprovalVec($vehicle_id);
	}

	if(isset($_POST['approve'])){
		$conn2 = new DatabaseTable('vehiclecategory');
		//$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

		$val = array(
			"vehicleID"=>$_POST['vehicleID'],
			"hitcount"=>"0",
			"category"=>"normal"
		);

		$conn2->insert($val);

		$val2 = array(
			"uploadStatus"=>1,
			"vehicleID"=>$_POST['vehicleID']
		);

		$conn->update($val2,"vehicleID");
		header('location:index.php?page=approve');
	}

	if(isset($_POST['discard'])){
		$conn->delete("vehicleID", $_POST['vehicleID']);
	}

	if(isset($_POST['cancel'])){
		header('location:index.php?page=approve');
	}
	
	$content = loadTemplate('../templates/admin/approvalViewTemplate.php', ["data"=>$data]);//load template 
?>