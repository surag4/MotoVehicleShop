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
                $pidjs = $value['vec_id'];
        ?>
        <div class="vehicle">
            <div class="thumbnail_images"> 
                <img src="../images/<?php echo $pidjs?>/1.jpg" alt="Image Link Broken" style="width:100%; height: 100%;" />
            </div>

            <div class="details">
                <span class="nameicon"> <i class="fa-solid fa-motorcycle"></i> </span>
                <span class="name"><?php echo $value['vec_name'];?></span>

                <span class="distTravelledicon"> <i class="fas fa-tachometer-alt"></i> </span>
                <span class="distTravelled"><?php echo $value['vec_distance'];?></span>

                <span class="locatedicon"> <i class="fas fa-map-marker-alt"></i> </span>
                <span class="located"><?php echo $value['vec_location'];?></span>
                    
                <span class="ccicon"> <i class="fas fa-bolt"></i> </span>
                <span class="cc"><?php echo $value['vec_engine'];?> CC</span>

                <span class="priceicon"> <i class="fas fa-rupee-sign"></i> </span>
                <span class="price"><?php echo $value['vec_price'];?></span>

                <a href="#" class="getvechicledetails"> Details </a>
            </div>
        </div>
        <?php } ?>

        <div class="viewmore" style="background: #78787f;">
            <i class="fas fa-arrow-right"></i>
        </div>
    </div>
</section>

<section class="slider">
    <h2>Trendy Used Bikes in Market</h2>
    <div class="slides">
        <?php  
            foreach ($trendBike as $value) {
                $pidjss = $value['vec_id'];
        ?>
        <div class="vehicle">
            <div class="thumbnail_images"> 
                <img src="../images/<?php echo $pidjss?>/1.jpg" alt="Image Link Broken" style="width:100%; height: 100%;" />
            </div>

            <div class="details">
                <span class="nameicon"> <i class="fa-solid fa-motorcycle"></i> </span>
                <span class="name"><?php echo $value['vec_name'];?></span>

                <span class="distTravelledicon"> <i class="fas fa-tachometer-alt"></i> </span>
                <span class="distTravelled"><?php echo $value['vec_distance'];?></span>

                <span class="locatedicon"> <i class="fas fa-map-marker-alt"></i> </span>
                <span class="located"><?php echo $value['vec_location'];?></span>
                    
                <span class="ccicon"> <i class="fas fa-bolt"></i> </span>
                <span class="cc"><?php echo $value['vec_engine'];?> CC</span>

                <span class="priceicon"> <i class="fas fa-rupee-sign"></i> </span>
                <span class="price"><?php echo $value['vec_price'];?></span>

                <a href="#" class="getvechicledetails"> Details </a>
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
                $pidjsss = $value['vec_id'];
        ?>
        <div class="vehicle">
            <div class="thumbnail_images"> 
                <img src="../images/<?php echo $pidjsss?>/1.jpg" alt="Image Link Broken" style="width:100%; height: 100%;" />
            </div>

            <div class="details">
                <span class="nameicon"> <i class="fa-solid fa-motorcycle"></i> </span>
                <span class="name"><?php echo $value['vec_name'];?></span>

                <span class="distTravelledicon"> <i class="fas fa-tachometer-alt"></i> </span>
                <span class="distTravelled"><?php echo $value['vec_distance'];?></span>

                <span class="locatedicon"> <i class="fas fa-map-marker-alt"></i> </span>
                <span class="located"><?php echo $value['vec_location'];?></span>
                    
                <span class="ccicon"> <i class="fas fa-bolt"></i> </span>
                <span class="cc"><?php echo $value['vec_engine'];?> CC</span>

                <span class="priceicon"> <i class="fas fa-rupee-sign"></i> </span>
                <span class="price"><?php echo $value['vec_price'];?></span>

                <a href="#" class="getvechicledetails"> Details </a>
            </div>
        </div>
        <?php } ?>
    </div>
</section>

<section class="flashsale">
     <?php  
            foreach ($premiumSale as $value) {
                $pidjsss = $value['vec_id'];
        ?>
        <div class="sale">
        <div class="vehicle">
                <div class="thumbnail_images"> 
                    <img src="../images/<?php echo $pidjsss?>/1.jpg" alt="Image Link Broken" style="width:100%; height: 100%;" />
         
                </div>
    
                <div class="details">
                <span class="nameicon"> <i class="fa-solid fa-motorcycle"></i> </span>
                <span class="name"><?php echo $value['vec_name'];?></span>

                <span class="distTravelledicon"> <i class="fas fa-tachometer-alt"></i> </span>
                <span class="distTravelled"><?php echo $value['vec_distance'];?></span>

                <span class="locatedicon"> <i class="fas fa-map-marker-alt"></i> </span>
                <span class="located"><?php echo $value['vec_location'];?></span>
                    
                <span class="ccicon"> <i class="fas fa-bolt"></i> </span>
                <span class="cc"><?php echo $value['vec_engine'];?> CC</span>

                <span class="priceicon"> <i class="fas fa-rupee-sign"></i> </span>
                <span class="price"><?php echo $value['vec_price'];?></span>

                <a href="#" class="getvechicledetails"> Details </a>
            </div>
            </div>
        </div>
    <?php }?>
    
</section>

</article>