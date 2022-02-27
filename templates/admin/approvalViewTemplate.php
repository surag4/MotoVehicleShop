<section class="registration">
    <form action="index.php?page=approvalView" method="POST">
        <div class="register-container">
            <h1>Approve A Vechicle</h1>
            <hr>
            <?php
            foreach($data as $value){
            ?>
            <label for="name">Vechicle Name</label>
            <input type="text" name="vec_name" placeholder="Vechicle Name" value="<?php echo $value['vec_name'];?>" disabled><br>

            <label for="name">Vechicle Distance Covered</label>
            <input type="number" name="vec_distance" placeholder="Vechicle Distance Covered" value="<?php echo $value['vec_distance'];?>" disabled><br><br>

            <label for="user anme temp">Vechicle location</label>
            <input type="text" placeholder="Vechicle location" name="vec_location" value="<?php echo $value['vec_location'];?>" disabled><br><br>
            
            <label for="name">Vechicle Engine CC</label>
            <input type="number" placeholder="Vechicle Engine CC" name="vec_engine" value="<?php echo $value['vec_engine'];?>" disabled><br><br>
        
            <label for="name">Vechicle Price</label>
            <input type="number" placeholder="Vechicle Price" name="vec_price" value="<?php echo $value['vec_price'];?>" disabled><br><br>

             <label for="name">Vechicle Type</label>
            <input type="text" placeholder="Vechicle Type" name="type" value="<?php echo $value['type'];?>" disabled><br><br>

            <label for="name">Vechicle Brand</label>
            <input type="text" placeholder="Vechicle brand" name="vec_brand" value="<?php echo $value['vec_brand'];?>" disabled><br><br>

            <label for="name">Vechicle Model</label>
            <input type="text" placeholder="Vechicle Model" name="vec_model" value="<?php echo $value['vec_model'];?>" disabled><br><br>

            <label for="name">Vechicle Upload Date</label>
            <input type="text" placeholder="Vechicle Upload Date" name="vec_upload_date" value="<?php echo $value['vec_upload_date'];?>" disabled><br><br>


             <input type="hidden" name="custID" value="<?php echo $value['custID'];?>">
             <input type="hidden" name="vec_id" value="<?php echo $value['vec_id'];?>">
             <?php } ?>
            <div class="registerbtns">
                <input type="submit" class="signupbtn" name="approve" value="Approve">
                <input type="submit" class="signupbtn" name="discard" value="Discard">
                <input type="submit" class="signupbtn" name="cancel" value="Cancel">
            </div>
        </div>
        </form> 
</section>