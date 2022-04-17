<?php
	$title="Payment Approvel";

	if(isset($_SESSION['login']) && $_SESSION['login'] == 1 && ($_SESSION['role']  == 'staff' || $_SESSION['role'] == 'admin')){
		$conn = new DatabaseTable('payment_esewa');
		$pendingesewa = $conn->findAll();
		$conn2 = new DatabaseTable('bankinfo');
		$pendingcard = $conn2->findAll();
		$conn3 = new DatabaseTable('cashondelivery');
		$pendingcash=$conn3->findAll();
		$conn4 = new DatabaseTable('users');
		$sellerEsewa = array();
		$seller_detail=array();
		foreach($pendingesewa as $value){
			$seller_detail=$conn4->getSeller($value['shid']);
			$sell=$seller_detail->fetch();
			array_push($sellerEsewa,$sell);
		}
		$pendingesewa = $conn->findAll();

		$sellerCard = array();
		$seller_detail=array();
		foreach($pendingcard as $value){
			$seller_detail=$conn4->getSeller($value['shid']);
			$sell=$seller_detail->fetch();
			array_push($sellerCard,$sell);
		}
		$pendingcard = $conn2->findAll();
		$sellerCash = array();
		$seller_detail=array();
		foreach($pendingcash as $value){
			$seller_detail=$conn4->getSeller($value['shid']);
			$sell=$seller_detail->fetch();
			array_push($sellerCash,$sell);
		}
		$pendingcash = $conn3->findAll();


		if(isset($_GET['approve'])){
		$conn5= new DatabaseTable('shortlist');
		$list=$conn5->getBuyerNSeller('shortlistid',$_GET['shid']);
		$fetch_list=$list->fetch();
		$vec_id=$fetch_list['vehicleID'];
		$valBuyer = array(
			"notif_title"=>"Payment Success",
			"notif_msg"=>"Your payment has been approved. We will contact you shortly.",
			"userID"=>$fetch_list['custID'],
			"vehicleID"=>$fetch_list['vehicleID']
		);
		$valSeller = array(
			"notif_title"=>"Vehicle Sold",
			"notif_msg"=>"Your vehicle has been sold. We will contact you shortly.",
			"userID"=>$fetch_list['userID'],
			"vehicleID"=>$fetch_list['vehicleID']
		);

		$conn6 = new DatabaseTable('notification');
		$conn6->insert($valBuyer);
		$conn6->insert($valSeller);
		
		$conn7 = new DatabaseTable('vehicle');
		$conn7->delete("vehicleID",$vec_id);
		
		$conn5= new DatabaseTable('shortlist');
		$conn5->delete("vehicleID",$vec_id);

		if($_GET['esewa']){
		$conn8= new DatabaseTable('payment_esewa');
		$conn8->delete("shid",$_GET["shid"]);}

		if($_GET['card']){
		$conn9= new DatabaseTable('bankinfo');
		$conn9->delete("shid",$_GET["shid"]);}


		if($_GET['cash']){
		$conn10= new DatabaseTable('cashondelivery');
		$conn10->delete("shid",$_GET["shid"]);}
		
		header('location:../admin/index.php?page=paymentapproval');
		
		}

		if(isset($_GET['deny'])){
		$conn5= new DatabaseTable('shortlist');
		$list=$conn5->getBuyerNSeller('shortlistid',$_GET['shid']);
		$fetch_list=$list->fetch();
		$vec_id=$fetch_list['vehicleID'];
		$valBuyer = array(
			"notif_title"=>"Payment Denied",
			"notif_msg"=>"Your payment has been Denied. Please re-request or contact us via chat.",
			"userID"=>$fetch_list['custID'],
			"vehicleID"=>$fetch_list['vehicleID']
		);
		
		$conn6 = new DatabaseTable('notification');
		$conn6->insert($valBuyer);
		
				
		if($_GET['esewa']==1){
		$conn8= new DatabaseTable('payment_esewa');
		$conn8->delete("shid",$_GET["shid"]);}

		if($_GET['card']==1){
		$conn9= new DatabaseTable('bankinfo');
		$conn9->delete("shid",$_GET["shid"]);}


		if($_GET['cash']==1){
		$conn10= new DatabaseTable('cashondelivery');
		$conn10->delete("shid",$_GET["shid"]);}
		
		header('location:../admin/index.php?page=paymentapproval');
		
		}

		$content = loadTemplate('../templates/admin/paymentapprovalTemplate.php', ["sellerCash"=>$sellerCash,"pendingcash"=>$pendingcash,"pendingcard"=>$pendingcard,"pendingesewa"=>$pendingesewa,"sellerEsewa"=>$sellerEsewa,"sellerCard"=>$sellerCard]);
	}else {
		session_unset();
		header('location:../public_html/index.php?page=login');
	}
?>