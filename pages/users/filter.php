<?php
    $title="Search Results";

    if(isset($_POST['trendScooter'])){
        $conn = new DatabaseTable('vehicle');
        $limit=10000;
        $viewResults=$conn->orderOnVehicleType('Scooter',$limit);
        $content = loadTemplate('../templates/users/searchTemplate.php', ['viewResults'=>$viewResults]);//load template
    }

    if(isset($_POST['trendBike'])){
        $conn = new DatabaseTable('vehicle');
        $limit=10000;
        $viewResults=$conn->orderOnVehicleType('Bike',$limit);
        $content = loadTemplate('../templates/users/searchTemplate.php', ['viewResults'=>$viewResults]);//load template
    }

    if(isset($_POST['popular'])){
        $conn = new DatabaseTable('vehicle');
        $limit=10000;
        $viewResults=$conn->orderOn('price',$limit);
        $content = loadTemplate('../templates/users/searchTemplate.php', ['viewResults'=>$viewResults]);//load template
    }

    // $conn_brand = new DatabaseTable('manufacturer');
	// $brands=$conn_brand->brandmodel();
    // $brandlist=$conn_brand->findAll('manufacturer');

	// $content = loadTemplate('../templates/users/searchTemplate.php', ['brands'=>$brands,'brandlist'=>$brandlist]);//load template
?>