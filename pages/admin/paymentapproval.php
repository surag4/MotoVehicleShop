<?php
$title="Payment Approvel";

$conn = new DatabaseTable('payment_esewa');
$pendingesewa = $conn->findAll();
$conn2 = new DatabaseTable('creditinfo');
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
?>