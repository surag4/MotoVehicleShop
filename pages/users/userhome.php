<?php
	$title = "Safari Express";
	$conn = new DatabaseTable('vehicle');
	$trendScooter=$conn->orderOnVehicleType('Scooter');
	$trendBike=$conn->orderOnVehicleType('Bike');
	$popular=$conn->orderOn('price');
	$premiumSale=$conn->orderOnPremium();
	
	if(isset($_POST['book_prop'])){
		if(isset($_SESSION["login"]) && $_SESSION["login"]== True){
			$path = 'location:index.php?page=enquire&pid='.$_POST['pid'].'&ermsg=0';
			header($path);
		}
		else {
			header('location:index.php?page=login');
		}
	}

	$content = loadTemplate('../templates/users/userhomeTemplate.php', ["trendScooter"=>$trendScooter,"trendBike"=>$trendBike,"popular"=>$popular,"premiumSale"=>$premiumSale]);//load template
?>