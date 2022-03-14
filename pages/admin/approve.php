<?php 
	$title = "Safari Express";
	$conn = new DatabaseTable('vehicle');
	$data=$conn->findApprovals();
	$content = loadTemplate('../templates/admin/approveTemplate.php', ["data"=>$data]);//load template 
?>