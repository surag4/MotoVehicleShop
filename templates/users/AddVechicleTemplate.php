<section class="registration">
    <form action="index.php?page=AddVechicle" method="POST">
        <div class="register-container">
            <h1>Add A Vechicle</h1>
            <p>Please fill in this form to start the process.</p>
            <hr>
            
            <label for="name">Vechicle Name</label>
            <input type="text" name="vec_name" placeholder="Enter Vechicle Name" required><br>

            <label for="name">Vechicle Distance Covered</label>
            <input type="number" name="vec_distance" placeholder="Enter Vechicle Distance Covered" required><br><br>

            <label for="user anme temp">Vechicle location</label>
            <input type="text" placeholder="Enter Vechicle location" name="vec_location" required><br><br>
            
            <label for="name">Vechicle Engine CC</label>
            <input type="number" placeholder="Enter Vechicle Engine CC" name="vec_engine" required><br><br>
        
            <label for="name">Vechicle Price</label>
            <input type="number" placeholder="Enter Vechicle Price" name="vec_price" required><br><br>

            <input type="radio" name="type" value="Bike" checked>
            <label for="html">BIKE</label><br>
            <input type="radio" name="type" value="Scooter">
            <label for="html">SCOOTER</label><br>
            <br><br>

             <label>Choose a Brand:</label>

<select name="vec_brand">
  <option value="Honda">Honda</option>
  <option value="Bajaj">Bajaj</option>
  <option value="Hero">Hero</option>
  <option value="Vespa">Vespa</option>
  <option value="Suzuki">Suzuki</option>
</select> <br><br>


            <label for="name">Vechicle Model</label>
            <input type="text" name="vec_model" placeholder="Ex. Shine, Splender, NS, etc." required><br>           


             
            <input type="hidden" name="upload_status" value="0">
            <input type="hidden" name="vec_upload_date" value=<?php echo date('d-m-y');?>>
             <input type="hidden" name="custID" value="1">
            <div class="registerbtns">
                <input type="submit" class="signupbtn" name="submit" value="Submit">
            </div>
        </div>
        </form> 
</section>