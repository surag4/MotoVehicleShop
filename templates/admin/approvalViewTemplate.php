<section class="veh-approval">
    <form action="index.php?page=approvalView" method="POST">
        <div class="approval-container">
            <h1>Approve A Vechicle</h1>
            <hr>
            <?php
            foreach($data as $value){
            ?>
            <div class="approvalsubcont">
                <label for="name">Vechicle Model</label>
                <input type="text" name="modelName" placeholder="Vechicle Name" value="<?php echo $value['modelName'];?>" disabled>
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

            <?php } ?>
            
            <div class="registerbtns">
                <input type="submit" class="signupbtn" name="approve" value="Approve">
                <input type="submit" class="signupbtn" name="discard" value="Discard">
                <input type="submit" class="signupbtn" name="cancel" value="Cancel">
            </div>
        </div>
        </form> 
</section>