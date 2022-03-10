<section>
    <div class="vehicledetails">
        <h2><?php echo "Entry Year + Vehicle Model";?></h2>
        <h5><?php echo "Location"." | "."No of Views"." | "."Posted no o Days Ago";?></h5>
        
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
                    <span class="vehiconval">2020</span>
                </div>
            </div>

            <div class="vehicon">
                <i class="fa-solid fa-user fa-2xl"></i>
                <div class="vehiconlist">
                    <span class="vehiconhead">Owner</span>
                    <span class="vehiconval">1st Owner</span>
                </div>
            </div>

            <div class="vehicon">
                <i class="fas fa-map-marker-alt fa-2xl"></i>
                <div class="vehiconlist">
                    <span class="vehiconhead">Location</span>
                    <span class="vehiconval">2020</span>
                </div>
            </div>

            <div class="vehicon">
                <i class="fas fa-tachometer-alt fa-2xl"></i>
                <div class="vehiconlist">
                    <span class="vehiconhead">KMs Driven</span>
                    <span class="vehiconval">2020</span>
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
                    <span class="vehiconval">2020</span>
                </div>
            </div>
            </div>
            <div class="vehdesc">
                <h2>Description</h2>
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, voluptatum est! Totam quam necessitatibus quo ab repellat dolorem, provident cum obcaecati sapiente. Quia atque dignissimos possimus, eius illo distinctio quod rem laborum architecto vitae natus et ratione. Optio ipsa commodi libero? Doloremque earum deleniti architecto omnis officiis vitae, quae repellendus.</span>
            </div>
        </div>
    </div>

</section>