<section class="addVehicle">
    <form action="index.php?page=AddVechicle" name="addvec" method="POST">
        <div class="addVehicle-container">
            <h1>Add A Vechicle</h1>
            <p>Please fill in this form to start the process.</p>
            <hr>
            
            <div class="addvecname">
            <label for="name">Vechicle Name</label>
            <input type="text" name="vec_name" placeholder="Vechicle Name" required>
            </div>

            <div class="addvecdist">
            <label for="name">Vechicle Distance Covered</label>
            <input type="number" name="vec_distance" placeholder="Vechicle Distance Covered in KM" required>
            </div>

            <div class="addvecloc">
            <label for="user anme temp">Vechicle location</label>
            <input type="text" placeholder="Vehicle Located" name="vec_location" required>
            </div>

            <div class="addveccc">
            <label for="name">Engine Displacement</label>
            <input type="number" placeholder="Vechicle Engine CC" name="vec_engine" required>
            </div>

            <div class="addvecprice">
            <label for="name">Vechicle Price</label>
            <input type="number" placeholder="Vechicle Price" name="vec_price" required>
            </div>
            <!-- <input type="radio" name="type" value="Bike" checked>
            <label for="html">BIKE</label>
            <input type="radio" name="type" value="Scooter">
            <label for="html">SCOOTER</label>
             -->
            <div class="addvecbrand">
                <label for="brand">Select a brand: </label>
                <select name="brand" id="brand" onchange="modellist(this.options[this.selectedIndex].value);">
                    <option value="">Select Brand</option>
                    <?php 
                    foreach ($brandlist as $value) {
                        echo '<option value="'.$value['brandName'].'">'.$value['brandName'].'</option>';
                    } 
                    ?>
                </select>
            </div>
  
            <div class="addvecmodel">
            <label for="model">Select a model: </label>
                <div class="modellist">
                    <script type="text/javascript" language="JavaScript">
                        document.write('<select name="model"><option value="">Select Model</option></select>')
                    </script>
                    <noscript>
                        <select name="model" id="model" >
                            <option value="">Select Model</option>
                        </select>
                    </noscript>
                </div>
            </div>

            <input type="hidden" name="upload_status" value="0">
            <input type="hidden" name="views" value="0">
            <input type="hidden" name="vec_upload_date" value=<?php echo date('d-m-y');?>>
            
            <input type="hidden" name="userID" value="1">
            <div class="registerbtns">
                <input type="submit" name="submit" value="Submit">
            </div>
        </div>

        <div class="vehicle-pictures">
                <label>Add a picture:</label>
                <input type="file" name="fileToUpload" id="fileToUpload" required>
        </div>
    </form> 
</section>

<script>
// filter dropdown menu for brand/models

function modellist(listindex) {

  document.addvec.model.options.length = 0;
  switch (listindex) {
    <?php
      $modelcount = 1;
      $brandcount = 1;
      foreach ($brands as $value) {    
        if ($brandcount == $value['brandID']) {
          if ($modelcount == 1) {
            echo 'case "'.$value['brandName'].'": '; 
            echo 'document.addvec.model.options[0] = new Option("Select Model", "");';
          }
          echo 'document.addvec.model.options['.$modelcount.'] = new Option("'.$value['modelName'].'", "'.$value['modelName'].'");';
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