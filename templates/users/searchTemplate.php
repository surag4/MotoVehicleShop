<article class="filter">
  <section class="filterSelections">
    <h3> Filters </h3>

    <form id="formname" name="formname" method="post" action="#" >
      <div class="filterPrice">
        <p class="filtersubhead"> Price </p>
        <div class="price-input">
          <div class="price-inputbox">
            <input type="number" class="input-min" min="0" max="900000" value="100000">
          </div>

          <div class="separator">-</div>
            <div class="price-inputbox">
              <input type="number" class="input-max" min="50000" max="1000000" value="750000">
            </div>
          </div>

          <div class="priceslider">
            <div class="price-progress"></div>
          </div>

          <div class="range-inputbox">
            <input type="range" class="pricerange-min" min="0" max="900000" value="100000" step="10000">
            <input type="range" class="pricerange-max" min="50000" max="1000000" value="750000" step="10000">
          </div>
        </div>
      </div>

      <div class="filterDist">
        <p class="filtersubhead"> Kilometer Driven </p>
        <div class="distcont">
          <span>From</span>
          <input type="number" name="km" id="filterdist">
          <span>to</span>
          <input type="number" name="km" id="filterdist">
        </div>
      </div>

      <div class="filterCC">
        <fieldset>      
          <legend class="filtersubhead"> Engine Displacement (CC)</legend>        
          <label> <input type="checkbox" name="cc" value="100to110"> 100cc - 110cc </label> <br>
          <label> <input type="checkbox" name="cc" value="110to125"> 110cc - 125cc </label> <br>              
          <label> <input type="checkbox" name="cc" value="125to150"> 125cc - 150cc </label> <br> 
          <label> <input type="checkbox" name="cc" value="150to200"> 150cc - 200cc </label> <br>
          <label> <input type="checkbox" name="cc" value="200to300"> 200cc - 300cc </label> <br> 
          <label> <input type="checkbox" name="cc" value="300to500"> 300cc - 500cc </label> <br>  
          <label> <input type="checkbox" name="cc" value="500to1000"> 500cc - 1000cc </label> <br> 
          <label> <input type="checkbox" name="cc" value="1000above"> 1000cc - Above </label> <br>               
        </fieldset>    
      </div>
      
      <div class="filterBrand">
          <p  class="filtersubhead">Brand</p>
          <select name="brand" id="brand" onchange="modellist(this.options[this.selectedIndex].value);">
            <option value="">Select Brand</option>
            <?php 
              foreach ($brandlist as $value) {
                echo '<option value="'.$value['brandName'].'">'.$value['brandName'].'</option>';
              } 
            ?>
          </select>
      </div>
  
      <div class="filterModel">
          <p class="filtersubhead">Model</p>
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

      <div class="filterYear">
          <p class="filtersubhead">Model Year</p>
          <div class="yearcont">
          <span>From</span>
          <input type="number" name="year" min="2010" max="2021" id="filteryear">
          <span>to</span>
          <input type="number" name="year" min="2011" max="2022" id="filteryear">
        </div>
      </div>

      <input type="submit" value="Filter Results">
    </form>
  </section>

  <section class="filterResults">
    <?php foreach ($viewResults as $value) { $vehID = $value['vehicleID']; ?>
    <div class="filtervehicle">
      <div class="filter_thumbnail_images"> 
        <img src="../images/<?php echo $vehID;?>/1.jpg" alt="Image Link Broken" style="width:100%; height: 100%;" />
      </div>

      <div class="filter_details">
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
  </section>
</article>

<script>
// filter dropdown menu for brand/models

function modellist(listindex) {

  document.formname.model.options.length = 0;
  switch (listindex) {
    <?php
      $modelcount = 1;
      $brandcount = 1;
      foreach ($brands as $value) {    
        if ($brandcount == $value['brandID']) {
          if ($modelcount == 1) {
            echo 'case "'.$value['brandName'].'": '; 
            echo 'document.formname.model.options[0] = new Option("Select Model", "");';
          }
          echo 'document.formname.model.options['.$modelcount.'] = new Option("'.$value['modelName'].'", "'.$value['modelName'].'");';
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