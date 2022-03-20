<header>
        <nav>
            <div class="logo">
                <a href="index.php"> <img src="../images/logo/logo.jpg" alt="Safari Express"></a>
            </div>

            <div class="nav-list">
                <a href="index.php">Home</a>
                <!-- logged in links -->
                <?php
                    if(isset($_SESSION['login']) && $_SESSION['login'] == 1){
                        // echo '<a href="index.php?page=history">History</a>';
                        // echo '<a href="index.php?page=chatnow">Chat</a>';
                       echo '<a href="index.php?page=AddVechicle">Add Vehicle</a>';
                       echo '<a href="index.php?page=Cart">Cart</a>';
                    }
                ?>
                
                <a href="index.php?page=about">About</a>
                <a href="index.php?page=contact">Contact Us</a>
                    
                <?php
                    if(isset($_SESSION['login']) && $_SESSION['login'] == 1){
                ?> 
                <!-- notification bell -->
                <div class="dropdown" id="dropdown">
                    <button class="dropbtn" onclick="myFunction()"><i class="fa fa-bell"></i></button>
                    <div class="dropdown-content" id="dropdown-content">
                       <?php
                       foreach($notif as $value){
                           if($value['notif_title']=="Vehicle Approved"){
                           echo '<a href="index.php?page=viewvehicle&vid='.$value['vehicleID'].'&ermsg=0">';}
                       ?>
                       
                        <div class="itms">
                            <img src="../images/logo/avatar1.png" alt="logo">
                            <div class="text">
                               <?php
                               echo "<h3>". $value['notif_title'] ."</h3><br>";
                               echo "<h5>". $value['notif_msg'] ."</h3><br>";
                               echo "<h7>". $value['notif_date'] ."</h3><br>";
                               ?>
                            </div><br>
                        </div>

                        <?php 
                       if($value['notif_title']=="Vehicle Approved"){
                           echo '</a>';}
                       } ?>
                    </div>
                </div>
                <?php } ?>  

                <div class="nav-user">
                    <button class="userbtn" onclick="nav()">
                        <i class="fas fa-user"></i>
                    </button>
                    <div class="nav-user-content" id="nav-user-cont">
                            <?php
                                //if logged in
                                if(isset($_SESSION['login']) && $_SESSION['login'] == 1){
                                    echo '<div class="userdet">'.'Hi '. $_SESSION['userName'] .'<a href="index.php?page=userprofile"> <i class="fas fa-user-edit"></i>
                                    </a></div>';
                            ?> 
                        <!-- logout -->
                        <form method="POST" action="index.php?page=login">
                            <input class ="login" type="submit" value="LogOut" name="logout">
                        </form>

                        <?php } //if user isn't logged in
                        else{
                            echo '<a class="loginlnk" href="index.php?page=login">Login</a>';
                            echo '<a class="loginlnk" href="index.php?page=register">Sign Up</a>';
                    }?>
                    </div>
                </div> 
            </div>
        </nav>
    </header>
<article class="vehicleListing">
    <div class="searchcont">
        <div class="countsearch">
            <?php if (isset($countRes)){ ?>
            <span>Total Search results: <?php echo $countRes;}?></span>
        </div>
    
        <div class="searchbarProp">
            <form action="index.php?page=filter" method="post">
                <input type="text" name="query" required>
                <input type="submit" name="findvehicles" value="Search">
            </form>
        </div>
    </div>
   

<section class="slider">
    <h2>Trendy Used Scooter in Market</h2>
    <div class="slides">
        <?php  
            foreach ($trendScooter as $value) {
                $vidsc = $value['vehicleID'];
        ?>
        <div class="vehicle">
            <div class="thumbnail_images"> 
                <img src="../images/<?php echo $vidsc;?>/1.jpg" alt="Image Link Broken" style="width:100%; height: 100%;" />
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
            <form action="index.php?page=filter" method="post">
                <input type="submit" name="trendScooter" value="View All Scooters">
                <i class="fas fa-square-caret-right"></i> 
            </form>
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

        <div class="viewmore" style="background: #78787f;">
            <form action="index.php?page=filter" method="post">
                <input type="submit" name="trendBike" value="View All Bikes">
                <i class="fas fa-square-caret-right"></i> 
            </form>
        </div>
    </div>
</section>

<section class="slider">
    <h2>Popular Bikes/Scooter</h2>
    <div class="slides">
        <?php  
            foreach ($popular as $value) {
                $popvid = $value['vehicleID'];
        ?>
        <div class="vehicle">
            <div class="thumbnail_images"> 
                <img src="../images/<?php echo $popvid?>/1.jpg" alt="Image Link Broken" style="width:100%; height: 100%;" />
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
            <form action="index.php?page=filter" method="post">
                <input type="submit" name="popular" value="View All Vehicles">
                <i class="fas fa-square-caret-right"></i> 
            </form>
        </div>
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