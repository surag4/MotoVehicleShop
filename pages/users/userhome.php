<?php
	$title = "Safari Express";
	$conn = new DatabaseTable('vehicle');
	$limit=7;
	$trendScooter=$conn->orderOnVehicleType('Scooter',$limit);
	$trendBike=$conn->orderOnVehicleType('Bike',$limit);
	$popular=$conn->orderOn('price',$limit);
	$premiumSale=$conn->orderOnPremium();
	$notif= ["notif_title"=>"No Logs", "notif_msg"=>"Still Waiting For Something","notif_date"=>"Till Today"];
	
	if(isset($_POST['book_prop'])){
		if(isset($_SESSION["login"]) && $_SESSION["login"]== True){
			$path = 'location:index.php?page=enquire&pid='.$_POST['pid'].'&ermsg=0';
			header($path);
		}
		else {
			header('location:index.php?page=login');
		}
	}

	if (isset($_SESSION['login'])) {
	if($_SESSION['login']==1 && $_SESSION['userID']!=0){
	$connNotif = new DatabaseTable('notification');
	$notif = $connNotif->find("userID",$_SESSION['userID']);
	}
	}
	else{
	$_SESSION['login']=0;
	}
	$content = loadTemplate('../templates/users/userhomeTemplate.php', ["trendScooter"=>$trendScooter,"trendBike"=>$trendBike,"popular"=>$popular,"premiumSale"=>$premiumSale,"notif"=>$notif]);//load template
?>