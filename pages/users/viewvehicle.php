<?php
    $vehicle_id=0;
    $conn = new DatabaseTable('vehicle');
    if(isset($_GET['vid'])){
        $vehicle_id=$_GET['vid'];
        if($_GET['ermsg']){
            $ermsg=$_GET['ermsg'];
        }
        
    }
    if(isset($_GET['svid'])){
        $conn2= new DatabaseTable('shortlist');
        $val2 = array(
			"custID"=>$_SESSION['userID'],
			"vehicleID"=>$_GET['svid']
		);

		$conn2->insert($val2);
		header('location:index.php?page=viewvehicle&vid='.$_GET['svid'].'&ermsg=0');
    }
    $increase=$conn->updateHitPoint($vehicle_id);
	$data=$conn->findVec($vehicle_id);
    $shortlisted=$conn->shortList($_SESSION['userID'],$vehicle_id);
    $shortlisted=$shortlisted->fetch();
    $title="Vehicle Details";
    
	$content = loadTemplate('../templates/users/vehicleTemplate.php', ["data"=>$data,"shortlisted"=>$shortlisted]);
?>