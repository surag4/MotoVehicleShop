<?php
    $vehicle_id=0;
    $conn = new DatabaseTable('vehicle');
    if(isset($_GET['vid'])){
        $vehicle_id=$_GET['vid'];
        if($_GET['ermsg']){
            $ermsg=$_GET['ermsg'];
        }
        
    }
    if(isset($_GET['shvid'])){
        $conn2= new DatabaseTable('shortlist');
        $val2 = array(
			"custID"=>$_SESSION['userID'],
			"vehicleID"=>$_GET['shvid']
		);
        $vehicle_id=$_GET['shvid'];

		$conn2->insert($val2);
		header('location:index.php?page=viewvehicle&vid='.$_GET['shvid'].'&ermsg=0');
    }

    if(isset($_GET['dshid'])){
    $conn3 = new DatabaseTable('shortlist');
    $del = $conn3->delete("shortlistid",$_GET['dshid']);
    }
    $increase=$conn->updateHitPoint($vehicle_id);
	$data=$conn->findVec($vehicle_id);
    $shortlisted=[];
    if($_SESSION['login']==1){
    $shortlisted=$conn->shortList($_SESSION['userID'],$vehicle_id);
    $shortlisted=$shortlisted->fetch();
    }
    
    $title="Vehicle Details";
    
	$content = loadTemplate('../templates/users/vehicleTemplate.php', ["data"=>$data,"shortlisted"=>$shortlisted]);
?>