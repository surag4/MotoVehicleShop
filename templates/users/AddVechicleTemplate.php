<section class="addVehicle">
  <form action="index.php?page=AddVechicle" name="addvec" method="POST" enctype="multipart/form-data">
    <div class="addVehicle-container">
      <h1>Add A Vechicle</h1>
      <p>Please fill in this form to start the process.</p>
      <hr>

      <div class="addvecbrand">
        <label for="brand">Select a brand: </label>
        <select id="brand" onchange="modellist(this.options[this.selectedIndex].value);">
          <option value="">Select Brand</option>
          <?php 
            foreach ($brandlist as $value) {
              echo '<option value="'.$value['brandName'].'">'.$value['brandName'].'</option>';
            } 
          ?>
        </select>
      </div>
  
      <div class="addvecmodel">
        <label for="modelID">Select a model: </label>
        <div class="modellist">
          <script type="text/javascript" language="JavaScript">
            document.write('<select name="modelID" required><option value="">Select Model</option></select>')
          </script>
          <noscript>
            <select name="modelID" id="modelID" require>
              <option value="">Select Model</option>
            </select>
          </noscript>
        </div>
      </div>

      <div class="modelyr">
        <label for="modelYear">Model Year</label>
        <input type="number" name="modelYear" max="<?php $mydate=getdate(date("U")); echo "$mydate[year]"?>" placeholder="Model Year" required>
      </div>

      <div class="addvecdist">
        <label for="name">Distance Travelled</label>
        <input type="number" name="distanceTravelled" placeholder="Distance travelled by vehicle in KM" required>
      </div>

      <div class="addvecloc">
        <label for="user anme temp">Location Registered</label>
        <input type="text" placeholder="Located Registered" name="locationRegistered" required>
      </div>

      <div class="addvecprice">
        <label for="name">Vechicle Price</label>
        <input type="number" placeholder="Vechicle Price" name="price" required>
      </div>

      <div class="addveccc">
        <label for="owner">Owner Number</label>
        <select name="owner" id="owner" required>
          <option value="1st Owner">1st Owner</option>
          <option value="2nd Owner">2nd Owner</option>
          <option value="3rd Owner">3rd Owner</option>
        </select>
      </div> 

      <div class="vecdesc">
        <label>Description</label>
        <textarea name="vehicleDescription" ></textarea>
      </div>

      <div class="vehicle-pictures">
        <label>Add a picture:</label>
        <input type="file" name="fileToUpload[]" id="fileToUpload" multiple required>
      </div>

      <input type="hidden" name="userID" value="<?php echo $_SESSION['userID']; ?>">
      <div class="registerbtns">
          <input type="submit" name="submit" value="Submit">
      </div>
    </div>

       
    </form> 
</section>

<script>
// filter dropdown menu for brand/models

function modellist(listindex) {

  document.addvec.modelID.options.length = 0;
  switch (listindex) {
    <?php
      $modelcount = 1;
      $brandcount = 1;
      foreach ($brands as $value) {    
        if ($brandcount == $value['brandID']) {
          if ($modelcount == 1) {
            echo 'case "'.$value['brandName'].'": '; 
            echo 'document.addvec.modelID.options[0] = new Option("Select Model", "");';
          }
          echo 'document.addvec.modelID.options['.$modelcount.'] = new Option("'.$value['modelName'].'", "'.$value['modelID'].'");';
          $modelcount=$modelcount+1;
        } else {
          echo 'break;';
          $brandcount = $brandcount+1;
          $modelcount = 1;
          
        }  
      } 
    ?>
    break;

  }
  return true;
}
</script>