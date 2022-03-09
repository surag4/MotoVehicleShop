<section>
    <div class="vehicledetails">
        <h2><?php echo "Vehicle Name";?></h2>
        
        <div class="property_pictures">
            <?php
                $pid =1;

                $counter=1;
                $dire = "../images/".$pid;
                $images = glob($dire . "/*");
                foreach($images as $tasbir){ 
            ?>
                <div class="prop_picture_cont">
                    <div class="numbertext"><?php echo $counter; $counter++; echo ' / '.count($images).'';?></div>
                    <a target="_self" href="<?php echo $tasbir?>" data-lightbox="mygallery" data-title="<?php echo "Vehicle Name";?>">
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
                        <img class="demo cursor" src="../images/<?php echo $img;?>" style="width:100%" onclick="currentPropViewSlide(<?php echo $counter; $counter++?>)" alt="<?php echo "Vehicle Name";?>">
                    </div>
                <?php } ?>
        
            </div>
        </div>
       
    </div>
</section>