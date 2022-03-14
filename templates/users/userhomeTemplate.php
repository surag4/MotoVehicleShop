<article class="vehicleListing">
    <div class="searchcont">
        <div class="countsearch">
            <?php if (isset($countRes)){ ?>
            <span>Total Search results: <?php echo $countRes;}?></span>
        </div>
    
        <div class="searchbarProp">
            <form action="index.php?page=filter" method="post">
                <input type="text" name="query" required>
                <input type="submit" name="findproperty" value="Search">
            </form>
        </div>
    </div>
   

<section class="slider">
    <h2>Trendy Used Scooter in Market</h2>
    <div class="slides">
        <?php  
            foreach ($trendScooter as $value) {
                $pidjs = $value['vehicleID'];
        ?>
        <div class="vehicle">
            <div class="thumbnail_images"> 
                <img src="../images/<?php echo $pidjss?>/1.jpg" alt="Image Link Broken" style="width:100%; height: 100%;" />
            </div>

            <div class="details">
                <span class="nameicon"> <i class="fa-solid fa-motorcycle"></i> </span>
                <span class="name"><?php echo $value['modelName'];?></span>

                <span class="distTravelledicon"> <i class="fas fa-tachometer-alt"></i> </span>
                <span class="distTravelled"><?php echo $value['distanceTravelled'];?></span>

                <span class="locatedicon"> <i class="fas fa-map-marker-alt"></i> </span>
                <span class="located"><?php echo $value['locationRegistered'];?></span>
                    
                <span class="ccicon"> <i class="fas fa-bolt"></i> </span>
                <span class="cc"><?php echo $value['cubicCapacity'];?> CC</span>

                <span class="priceicon"> <i class="fas fa-rupee-sign"></i> </span>
                <span class="price"><?php echo $value['price'];?></span>

                <a href="index.php?page=viewvehicle&vid=<?php echo $value['vehicleID'];?>&ermsg=0" class="getvechicledetails"> Details </a>
            </div>
        </div>
        <?php } ?>

        <div class="viewmore" style="background: #78787f;">
            <span>View All Scooters</span>
            <i class="fas fa-square-caret-right"></i>
        </div>
    </div>
</section>

<section class="slider">
    <h2>Trendy Used Bikes in Market</h2>
    <div class="slides">
        <?php  
            foreach ($trendBike as $value) {
                $pidjss = $value['vehicleID'];
        ?>
        <div class="vehicle">
            <div class="thumbnail_images"> 
                <img src="../images/<?php echo $pidjss?>/1.jpg" alt="Image Link Broken" style="width:100%; height: 100%;" />
            </div>

            <div class="details">
                <span class="nameicon"> <i class="fa-solid fa-motorcycle"></i> </span>
                <span class="name"><?php echo $value['modelName'];?></span>

                <span class="distTravelledicon"> <i class="fas fa-tachometer-alt"></i> </span>
                <span class="distTravelled"><?php echo $value['distanceTravelled'];?></span>

                <span class="locatedicon"> <i class="fas fa-map-marker-alt"></i> </span>
                <span class="located"><?php echo $value['locationRegistered'];?></span>
                    
                <span class="ccicon"> <i class="fas fa-bolt"></i> </span>
                <span class="cc"><?php echo $value['cubicCapacity'];?> CC</span>

                <span class="priceicon"> <i class="fas fa-rupee-sign"></i> </span>
                <span class="price"><?php echo $value['price'];?></span>

                <a href="index.php?page=viewvehicle&vid=<?php echo $value['vehicleID'];?>&ermsg=0" class="getvechicledetails"> Details </a>
            </div>
        </div>
        <?php } ?>
    </div>
</section>

<section class="slider">
    <h2>Popular Bikes/Scooter</h2>
    <div class="slides">
        <?php  
            foreach ($popular as $value) {
                $pidjsss = $value['vehicleID'];
        ?>
        <div class="vehicle">
            <div class="thumbnail_images"> 
                <img src="../images/<?php echo $pidjss?>/1.jpg" alt="Image Link Broken" style="width:100%; height: 100%;" />
            </div>

            <div class="details">
                <span class="nameicon"> <i class="fa-solid fa-motorcycle"></i> </span>
                <span class="name"><?php echo $value['modelName'];?></span>

                <span class="distTravelledicon"> <i class="fas fa-tachometer-alt"></i> </span>
                <span class="distTravelled"><?php echo $value['distanceTravelled'];?></span>

                <span class="locatedicon"> <i class="fas fa-map-marker-alt"></i> </span>
                <span class="located"><?php echo $value['locationRegistered'];?></span>
                    
                <span class="ccicon"> <i class="fas fa-bolt"></i> </span>
                <span class="cc"><?php echo $value['cubicCapacity'];?> CC</span>

                <span class="priceicon"> <i class="fas fa-rupee-sign"></i> </span>
                <span class="price"><?php echo $value['price'];?></span>

                <a href="index.php?page=viewvehicle&vid=<?php echo $value['vehicleID'];?>&ermsg=0" class="getvechicledetails"> Details </a>
            </div>
        </div>
        <?php } ?>
    </div>
</section>

<section class="flashsale">
     <?php  
            foreach ($premiumSale as $value) {
                $pidjsss = $value['vehicleID'];
        ?>
        <div class="sale">
        <div class="vehicle">
                <div class="thumbnail_images"> 
                    <img src="../images/<?php echo $pidjsss?>/1.jpg" alt="Image Link Broken" style="width:100%; height: 100%;" />
         
                </div>
    
                <div class="details">
                <span class="nameicon"> <i class="fa-solid fa-motorcycle"></i> </span>
                <span class="name"><?php echo $value['modelName'];?></span>

                <span class="distTravelledicon"> <i class="fas fa-tachometer-alt"></i> </span>
                <span class="distTravelled"><?php echo $value['distanceTravelled'];?></span>

                <span class="locatedicon"> <i class="fas fa-map-marker-alt"></i> </span>
                <span class="located"><?php echo $value['locationRegistered'];?></span>
                    
                <span class="ccicon"> <i class="fas fa-bolt"></i> </span>
                <span class="cc"><?php echo $value['cubicCapacity'];?> CC</span>

                <span class="priceicon"> <i class="fas fa-rupee-sign"></i> </span>
                <span class="price"><?php echo $value['price'];?></span>

                <a href="index.php?page=viewvehicle&vid=<?php echo $value['vehicleID'];?>&ermsg=0" class="getvechicledetails"> Details </a>
            </div>
            </div>
        </div>
    <?php }?>
    
</section>

</article>