<?php
    $title="Search Results";
    $conn_brand = new DatabaseTable('manufacturer');
	$brands=$conn_brand->brandmodel();
    $brandlist=$conn_brand->findAll('manufacturer');

	$content = loadTemplate('../templates/users/searchTemplate.php', ['brands'=>$brands,'brandlist'=>$brandlist]);//load template
?>