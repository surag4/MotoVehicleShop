<?php
    $vehicle_id=0;
    $conn = new DatabaseTable('vehicle');
    if(isset($_GET['vid'])){
        $vehicle_id=$_GET['vid'];
        if($_GET['ermsg']){
            $ermsg=$_GET['ermsg'];
        }
        
    }
    $increase=$conn->updateHitPoint($vehicle_id);
	$data=$conn->findVec($vehicle_id);
    
    $title="Vehicle Details";
    
	$content = loadTemplate('../templates/users/vehicleTemplate.php', ["data"=>$data]);
?>