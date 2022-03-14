<?php 
	$title = "Safari Express";
	$conn = new DatabaseTable('vehicle');
	$data=$conn->find("upload_status",0);
	$content = loadTemplate('../templates/admin/approveTemplate.php', ["data"=>$data]);//load template 
?>