<?php
	$title = "Safari Express";
	$conn = new DatabaseTable('properties');
	$trendScooter=$conn->orderOn('vec_id');
	$trendBike=$conn->orderOn('vec_id');
	$popular=$conn->orderOn('vec_id');
	
	if(isset($_POST['book_prop'])){
		if(isset($_SESSION["login"]) && $_SESSION["login"]== True){
			$path = 'location:index.php?page=enquire&pid='.$_POST['pid'].'&ermsg=0';
			header($path);
		}
		else {
			header('location:index.php?page=login');
		}
	}

	$content = loadTemplate('../templates/users/userhomeTemplate.php', ["trendScooter"=>$trendScooter,"trendBike"=>$trendBike,"popular"=>$popular]);//load template
?>