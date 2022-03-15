<?php 
	$title = "Safari Express";
	$conn = new DatabaseTable('vehiclecategory');
	$onsale="premium";
	$offsale="normal";
	$onsaledata=$conn->flashSale($onsale);
	$offsaledata=$conn->flashSale($offsale);

	if(isset($GET['cid'])){
		$conn2 = new DatabaseTable('vehiclecategory');
		$val = array(
			"categoryID"=>$GET['cid'],
			"category"=>"premium"
		);
		$conn2->update($val,"categoryID");
		// header('location:index.php?page=sale');	
	}
	
	if(isset($GET['cvid'])){
		$conn2 = new DatabaseTable('vehiclecategory');
		$val = array(
			"categoryID"=>$GET['cid'],
			"category"=>"normal"
		);
		$conn2->update($val,"categoryID");
		// header('location:index.php?page=sale');
	}

	
	$content = loadTemplate('../templates/admin/saleTemplate.php', ["onsaledata"=>$onsaledata,"offsaledata"=>$offsaledata]);//load template 
?>