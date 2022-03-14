<?php
	$title = "Safari Express";
	$conn_brand = new DatabaseTable('manufacturer');
	$brands=$conn_brand->brandmodel();
    $brandlist=$conn_brand->findAll('manufacturer');
	$connToInsert = new DatabaseTable('vehicle');
	if(isset($_POST['submit'])){
	unset($_POST['submit']);
	$connToInsert-> insert($_POST);
		/*  IMAGE UPLOAD    */
			$getVal= new DatabaseTable('vehicle');
			$valu=$getVal->getlastVal('vehicleID');
			$nextVal=0;
			foreach($valu as $value){
				$nextVal = $value[0];
			}
			if( is_dir('../images/'.$nextVal) === false )
		{
		mkdir('../images/'.$nextVal);
		}	
			$newfilenum = 1;
			foreach($_FILES["fileToUpload"]["name"] as $key=>$val){
			$target_dir = "../images/".$nextVal."/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"][$key]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			$check = getimagesize($_FILES["fileToUpload"]["tmp_name"][$key]);
			if($check !== false) {
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
			} else {
			echo "File is not an image.";
			$uploadOk = 0;}

			if($imageFileType != "jpg" && $imageFileType != "jpeg") {
		echo "Sorry, only JPG, JPEG files are allowed.";
		$uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			$temp = explode(".", $_FILES["fileToUpload"]["tmp_name"][$key]);
		$newfilename = $newfilenum.".jpg";
		$newfilenum = $newfilenum + 1;
		if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$key], $target_dir . $newfilename)){
			//header('Location:index.php?page=manageproperty');
		}
		else{
			echo "Failed to do the operation. Please Try Again.";
		}
		}
		}
			
			/* end of script */	
			

			
	}

	$content = loadTemplate('../templates/users/AddVechicleTemplate.php', ['brands'=>$brands,'brandlist'=>$brandlist]);//load template
?>