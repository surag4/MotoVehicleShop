<section>
<?php
foreach($data as $value){
?>
    <div class="vehicledetails">
        <h2><?php $model = $value['modelName']; echo $model;?></h2>
        <h5><?php echo "Location: ".$value['locationRegistered']." | No. of Views: ".$value['hitcount']." | Date Uploaded: ".$value['vehiclePostDate'];?></h5>
        
        <div class="property_pictures">
            <?php
                $pid =$value['vehicleID'];

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
        
        <?php
        echo '<div class="buybtn">';
         if($shortlisted && $_SESSION['login']!=0){
             if($buy==1){
                echo '<a href=index.php?page=payment&shid='.$shortlisted['shortlistid'].'><button class="buyButton">BUY</button></a>';
            }             
        } 
        echo '</div>';
             
        if($shortlisted && $_SESSION['login']!=0){
            echo '<a href=index.php?page=viewvehicle&dshid='.$shortlisted['shortlistid'].'&vid='.$pid.'&ermsg=0>';
             
        } 
        elseif(!$shortlisted && $_SESSION['login']!=0) {
            echo '<a href=index.php?page=viewvehicle&shvid='.$pid.'&uid='.$_SESSION['userID'].'>';
        }
        else{
            echo '<a href=index.php?page=login>';
        }        
        ?>
        <div class="shortlist">
        
            <div class="like">
                <i class="<?php if($shortlisted && $_SESSION['login']!=0){echo "likebtn press";}else{echo "likebtn";}?>"></i>
                <span class="<?php if($shortlisted && $_SESSION['login']!=0){echo "likemsg press";}else{echo "likemsg";}?>">short listed!</span>
                <h5>Add/Remove To Cart</h5>
                </div>
        </div>
        <?php echo '</a>';?>
        <div class="vehicledesc">
            <div class="vehdeshead">
                <h2>Over View</h2>
            </div>

            <div class="vecicnlst">
            <div class="vehicon">
                <i class="fa-solid fa-calendar fa-2xl"></i>
                <div class="vehiconlist">
                    <span class="vehiconhead">Year</span>
                    <span class="vehiconval"><?php echo $value['modelYear'];?></span>
                </div>
            </div>

            <div class="vehicon">
                <i class="fa-solid fa-user fa-2xl"></i>
                <div class="vehiconlist">
                    <span class="vehiconhead">Owner</span>
                    <span class="vehiconval"><?php echo $value['firstName'];?></span>
                </div>
            </div>

            <div class="vehicon">
                <i class="fas fa-map-marker-alt fa-2xl"></i>
                <div class="vehiconlist">
                    <span class="vehiconhead">Location</span>
                    <span class="vehiconval"><?php echo $value['locationRegistered'];?></span>
                </div>
            </div>

            <div class="vehicon">
                <i class="fas fa-tachometer-alt fa-2xl"></i>
                <div class="vehiconlist">
                    <span class="vehiconhead">KMs Driven</span>
                    <span class="vehiconval"><?php echo $value['distanceTravelled'];?></span>
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
                    <span class="vehiconval"><?php echo $value['cubicCapacity'];?></span>
                </div>
            </div>
            </div>
            <div class="vehdesc">
                <h2>Description</h2>
                <span><?php echo $value['vehicleDescription'];?></span>
            </div>
        </div>
    </div>
    <?php } ?>
</section>