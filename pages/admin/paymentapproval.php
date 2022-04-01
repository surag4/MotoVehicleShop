<?php
$title="Payment Approvel";

$conn = new DatabaseTable('payment_esewa');
$pendingesewa = $conn->findAll();
$conn2 = new DatabaseTable('creditinfo');
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
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

 $content = loadTemplate('../templates/admin/paymentapprovalTemplate.php', ["sellerCash"=>$sellerCash,"pendingcash"=>$pendingcash,"pendingcard"=>$pendingcard,"pendingesewa"=>$pendingesewa,"sellerEsewa"=>$sellerEsewa,"sellerCard"=>$sellerCard]);
=======
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
$pendingcard = $conn->findAll();
$conn3 = new DatabaseTable('cashondelivery');
$conn4 = new DatabaseTable('shortlist');
$seller = array();
$seller_detail=[];
foreach($pendingesewa as $value){
	$seller_detail=$conn4->getSeller($value['shid']);
	array_push($seller,$seller_detail);
}
 $content = loadTemplate('../templates/admin/paymentapprovalTemplate.php', ["seller"=>$seller]);
<<<<<<< Updated upstream
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
?>