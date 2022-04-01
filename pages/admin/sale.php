<?php 
	$title = "Safari Express";
	$conn = new DatabaseTable('vehiclecategory');
	$onsale="premium";
	$offsale="normal";
	$onsaledata=$conn->flashSale($onsale);
	$offsaledata=$conn->flashSale($offsale);

	if(isset($_GET['cid'])){
		$conn = new DatabaseTable('vehiclecategory');
		$val = array(
			"categoryID"=>$_GET['cid'],
			"category"=>"premium"
		);
		$conn->update($val,"categoryID");
		header('location:index.php?page=sale');	
	}
	
	if(isset($_GET['cvid'])){
		$conn = new DatabaseTable('vehiclecategory');
		$val = array(
			"categoryID"=>$_GET['cvid'],
			"category"=>"normal"
		);
		$conn->update($val,"categoryID");
		header('location:index.php?page=sale');
	}

	
	$content = loadTemplate('../templates/admin/saleTemplate.php', ["onsaledata"=>$onsaledata,"offsaledata"=>$offsaledata]);//load template 
?>