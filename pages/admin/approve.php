<?php 
	$title = "Safari Express";
	$conn = new DatabaseTable('properties');
	$data=$conn->find("upload_status",0);
	$content = loadTemplate('../templates/admin/approveTemplate.php', ["data"=>$data]);//load template 
?>