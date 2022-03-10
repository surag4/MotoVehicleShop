<section>
<?php
foreach($data as $value){
?>
    <div class="vehicledetails">
        <h2><?php echo $value['vec_name'];?></h2>
        <h5><?php echo "Location: ".$value['vec_location']." | No. of Views: ".$value['hitcount']." | Date Uploaded: ".$value['vec_upload_date'];?></h5>
        
        <div class="property_pictures">
            <?php
                $pid =$value['vec_id'];

                $counter=1;
                $dire = "../images/".$pid;
                $images = glob($dire . "/*");
                foreach($images as $tasbir){ 
            ?>
                <div class="prop_picture_cont">
                    <div class="numbertext"><?php echo $counter; $counter++; echo ' / '.count($images).'';?></div>
                    <a target="_self" href="<?php echo $tasbir?>" data-lightbox="mygallery" data-title="<?php echo "Vehicle Model";?>">
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
                        <img class="demo cursor" src="../images/<?php echo $img;?>" style="width:100%" onclick="currentPropViewSlide(<?php echo $counter; $counter++?>)" alt="<?php echo "Vehicle Model";?>">
                    </div>
                <?php } ?>
        
            </div>
        </div>
                    
        <div class="shortlist">
            <div class="like">
                <i class="likebtn"></i>
                <span class="likemsg">short listed!</span>
            </div>
        </div>

        <div class="vehicledesc">
            <div class="vehdeshead">
                <h2>Over View</h2>
            </div>

            <div class="vecicnlst">
            <div class="vehicon">
                <i class="fa-solid fa-calendar fa-2xl"></i>
                <div class="vehiconlist">
                    <span class="vehiconhead">Year</span>
                    <span class="vehiconval"><?php echo $value['vec_model'];?></span>
                </div>
            </div>

            <div class="vehicon">
                <i class="fa-solid fa-user fa-2xl"></i>
                <div class="vehiconlist">
                    <span class="vehiconhead">Owner</span>
                    <span class="vehiconval"><?php echo $value['owner'];?></span>
                </div>
            </div>

            <div class="vehicon">
                <i class="fas fa-map-marker-alt fa-2xl"></i>
                <div class="vehiconlist">
                    <span class="vehiconhead">Location</span>
                    <span class="vehiconval"><?php echo $value['vec_location'];?></span>
                </div>
            </div>

            <div class="vehicon">
                <i class="fas fa-tachometer-alt fa-2xl"></i>
                <div class="vehiconlist">
                    <span class="vehiconhead">KMs Driven</span>
                    <span class="vehiconval"><?php echo $value['vec_distance'];?></span>
                </div>
            </div>

            <div class="vehicon">
                <i class="fa-solid fa-circle-plus fa-2xl"></i>
                <div class="vehiconlist">
                    <span class="vehiconhead">Condition</span>
                    <span class="vehiconval">2020</span>
                </div>
            </div>

            <div class="vehicon">
                <i class="fa-solid fa-bolt fa-2xl"></i>
                <div class="vehiconlist">
                    <span class="vehiconhead">CC</span>
                    <span class="vehiconval"><?php echo $value['vec_engine'];?></span>
                </div>
            </div>
            </div>
            <div class="vehdesc">
                <h2>Description</h2>
                <span><?php echo $value['description'];?></span>
            </div>
        </div>
    </div>
    <?php } ?>
</section>