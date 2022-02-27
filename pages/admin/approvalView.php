<?php 
	$title = "Safari Express";
	$data=[];
	$conn = new DatabaseTable('properties');
	if(isset($_GET['vid'])){
	$data=$conn->find("vec_id",$_GET['vid']);
	}

	if(isset($_POST['approve'])){
	$conn2 = new DatabaseTable('vehicle_category');
	//$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

	$val = array(
	"vec_id"=>$_POST['vec_id'],
	"hitcount"=>"0",
	"category"=>"normal"
	);

	$conn2->insert($val);

	$val2 = array(
	"upload_status"=>1,
	"vec_id"=>$_POST['vec_id']
	);

	$conn->update($val2,"vec_id");

	}

	if(isset($_POST['discard'])){
	$conn->delete("vec_id", $_POST['vec_id']);
	}

	if(isset($_POST['cancel'])){
	header('location:index.php?page=approve');
	}
	$content = loadTemplate('../templates/admin/approvalViewTemplate.php', ["data"=>$data]);//load template 
?>