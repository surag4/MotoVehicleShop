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

    if(isset($_POST['findvehicles'])){
        $conn = new DatabaseTable('vehicle');
        $viewResults=$conn->searchResults($_POST['query']);
        $content = loadTemplate('../templates/users/searchTemplate.php', ['viewResults'=>$viewResults]);//load template
    }

    if(isset($_POST['filtervehicles'])){
        $conn = new DatabaseTable('vehicle');
        
        if (!isset($_POST['cc'])) { $_POST['cc'] = "100 AND 1500"; } 
        if (!isset($_POST['brand'])) { $_POST['brand'] = "*"; } 
        if (!isset($_POST['model'])) { $_POST['model'] = "*"; }

        $viewResults=$conn->filterResults($_POST['minprice'], $_POST['maxprice'], $_POST['mindistanceTravelled'], $_POST['maxdistanceTravelled'],$_POST['cc'],$_POST['minyear'], $_POST['maxyear'],$_POST['brand'], $_POST['model']);
        $content = loadTemplate('../templates/users/searchTemplate.php', ['viewResults'=>$viewResults]);//load template
        
    }

    $conn_brand = new DatabaseTable('manufacturer');
	$brands=$conn_brand->brandmodel();
    $brandlist=$conn_brand->findAll('manufacturer');

	$content = loadTemplate('../templates/users/searchTemplate.php', ['brands'=>$brands,'brandlist'=>$brandlist,'viewResults'=>$viewResults]);//load template
?>