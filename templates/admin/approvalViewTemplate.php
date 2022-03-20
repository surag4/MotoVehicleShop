<section class="veh-approval">
    <form action="index.php?page=approvalView" method="POST">
        <div class="approval-container">
            <h1>Approve A Vechicle</h1>
            <hr>
            <?php
            foreach($data as $value){ ?>

            <div class="property_pictures">
                <?php
                    $pid =$value['vehicleID'];
                    $model = $value['modelName'];
                    $counter=1;
                    $dire = "../images/".$pid;
                    $images = glob($dire . "/*");
                    foreach($images as $tasbir){ 
                ?>
                    <div class="prop_picture_cont">
                        <div class="numbertext"><?php echo $counter; $counter++; echo ' / '.count($images).'';?></div>
                        <a target="_self" href="<?php echo $tasbir?>" data-lightbox="mygallery" data-title="<?php echo $model;?>">
                        <img src="<?php echo $tasbir;?>">
                        </a>
                    </div>
                <?php } ?>    

                <a class="prev" onclick="propViewerSlides(-1)">❮</a>
                <a class="next" onclick="propViewerSlides(1)">❯</a>

                <div class="caption-container">
                    <p id="caption"></p>
                </div>

                <div class="property_pictures_row">
                    <?php $counter=1; foreach ($images as $img) { ?> 
                        <div class="property_pictures_column">
                        <img class="demo cursor" src="../images/<?php echo $img;?>" style="width:100%" onclick="currentPropViewSlide(<?php echo $counter; $counter++?>)" alt="<?php echo $model;?>">
                </div>
                <?php } ?>
        
            </div>
        </div>

            <div class="approvalsubcont">
                <label for="name">Vechicle Model</label>
                <input type="text" name="modelName" placeholder="Vechicle Model" value="<?php echo $value['modelName'];?>" disabled>
            </div>

            <div class="approvalsubcont">
                <label for="name">Model Year</label>
                <input type="text" name="modelName" placeholder="Model Year" value="<?php echo $value['modelYear'];?>" disabled>
            </div>

            <div class="approvalsubcont"> 
                <label for="name">Vechicle Distance Covered</label>
                <input type="number" name="distanceTravelled" placeholder="Vechicle Distance Covered" value="<?php echo $value['distanceTravelled'];?>" disabled>
            </div>

            <div class="approvalsubcont"> 
                <label for="user anme temp">Vechicle location</label>
                <input type="text" placeholder="Vechicle location" name="locationRegistered" value="<?php echo $value['locationRegistered'];?>" disabled>
            </div>

            <div class="approvalsubcont"> 
                <label for="name">Vechicle Engine CC</label>
                <input type="number" placeholder="Vechicle Engine CC" name="cubicCapacity" value="<?php echo $value['cubicCapacity'];?>" disabled>
            </div>

            <div class="approvalsubcont"> 
                <label for="name">Vechicle Price</label>
                <input type="number" placeholder="Vechicle Price" name="price" value="<?php echo $value['price'];?>" disabled>
            </div>

            <div class="approvalsubcont"> 
                <label for="name">Vechicle Type</label>
                <input type="text" placeholder="Vechicle Type" name="vehicleType" value="<?php echo $value['vehicleType'];?>" disabled>
            </div>

            <div class="approvalsubcont"> 
                <label for="name">Vechicle Brand</label>
                <input type="text" placeholder="Vechicle brand" name="brandName" value="<?php echo $value['brandName'];?>" disabled>
            </div>

            <div class="approvalsubcont"> 
                <label for="name">Vechicle Model</label>
                <input type="text" placeholder="Vechicle Model" name="modelName" value="<?php echo $value['modelName'];?>" disabled>
            </div>

            <div class="approvalsubcont"> 
                <label for="name">Vechicle Upload Date</label>
                <input type="text" placeholder="Vechicle Upload Date" name="vehiclePostDate" value="<?php echo $value['vehiclePostDate'];?>" disabled>
            </div>

            <input type="hidden" name="vehicleID" value="<?php echo $value['vehicleID'];?> ">
            <input type="hidden" name="userID" value="<?php echo $value['userID'];?> ">

            <div class="property_pictures">
                <?php
                    $pid =$value['vehicleID'];
                    $model = $value['modelName'];
                    $counterII=1;
                    $dire2 = "../images/BillBook/".$pid;
                    $images2 = glob($dire2 . "/*");
                    foreach($images2 as $tasbir2){ 
                ?>
                    <div class="prop_picture_cont">
                        <div class="numbertext"><?php echo $counterII; $counterII++; echo ' / '.count($images2).'';?></div>
                        <a target="_self" href="<?php echo $tasbir2?>" data-lightbox="mygallery" data-title="<?php echo $model;?>">
                        <img src="<?php echo $tasbir2;?>">
                        </a>
                    </div>
                <?php } ?>    

                <a class="prev" onclick="propViewerSlides(-1)">❮</a>
                <a class="next" onclick="propViewerSlides(1)">❯</a>

                <div class="caption-container">
                    <p id="caption"></p>
                </div>

                <div class="property_pictures_row">
                    <?php $counterII=1; foreach ($images2 as $img2) { ?> 
                        <div class="property_pictures_column">
                        <img class="demo cursor" src="<?php echo $img2;?>" style="width:100%" onclick="currentPropViewSlide(<?php echo $counterII; $counterII++?>)" alt="<?php echo $model;?>">
                </div>
                <?php } ?>
        
            </div>

            <?php } ?>

            <div class="registerbtns">
                <input type="submit" class="signupbtn" name="approve" value="Approve">
                <input type="submit" class="signupbtn" name="discard" value="Discard">
                <input type="submit" class="signupbtn" name="cancel" value="Cancel">
            </div>
        </div>
        </form> 
</section>