<section>
 <div class="slides">
        <?php  
            foreach ($allVec as $value) {
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
                <?php
                if($value['category']=="premium"){
                echo '<a href="index.php?page=dashboard&rvid='.$value['vec_id'].'" class="getvechicledetails"> Remove From Premium </a>';
                }
                else{
                echo '<a href="index.php?page=dashboard&vid='.$value['vec_id'].'" class="getvechicledetails"> Make It Premium </a>';
                }
                ?>
            </div>
        </div>
        <?php } ?>
    </div>
</section>