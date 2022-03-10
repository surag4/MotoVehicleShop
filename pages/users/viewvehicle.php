<?php
    // if(isset($_SESSION['login']) && $_SESSION['login'] == 1 && $_SESSION['role']  == 'user' ) {
        $vehicle_id=0;
        $ermsg="0";

        if(isset($_GET['vid'])){
            $vehicle_id=$_GET['vid'];
            if($_GET['ermsg']){
                $ermsg=$_GET['ermsg'];
            }
            
        }

    $conn = new DatabaseTable('properties');
	$data=$conn->find('vec_id',$vehicle_id);
    $title="Vehicle Details";
    // $conn2 = new DatabaseTable('bookings');
    // $chk=$conn2->find('vec_id',$vehicle_id);
    // $connForFeedBack = new DatabaseTable('feedbacks');
    // $allfeedback=$connForFeedBack->findrating('vec_id',$vehicle_id);
    // foreach($chk as $key){
    //     if($key['vec_id']==$vehicle_id){
    //         $availability="NotAvailable";
    //     }
    // }
	$content = loadTemplate('../templates/users/vehicleTemplate.php', ['vid'=>$vehicle_id]);//load template
    // }
?>