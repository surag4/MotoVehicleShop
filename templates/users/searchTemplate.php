<article class="filter">
  <section class="filterSelections">
    <h3> Filters </h3>

    <form id="formname" name="formname" method="post" action="#" >
      <div class="filterPrice">
        <p> Price </p>
        <div class="price-input">
          <div class="price-inputbox">
            <span>Min</span>
            <input type="number" class="input-min" min="0" max="900000" value="100000">
          </div>

          <div class="separator">-</div>
            <div class="price-inputbox">
              <span>Max</span>
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
          <p> Kilometer Driven </p>
          <!-- min to max -->
      </div>

      <div class="filterCC">
        <fieldset>      
          <legend> Engine Displacement (CC)</legend>      
          <input type="checkbox" name="cc" value="100to110">     
          <label for="">100cc - 110cc</label> <br>

          <input type="checkbox" name="cc" value="110to125">
          <label for="">110cc - 125cc </label> <br>  
              
          <input type="checkbox" name="cc" value="125to150">
          <label for="">125cc - 150cc </label> <br> 

          <input type="checkbox" name="cc" value="150to200">
          <label for="">150cc - 200cc </label> <br>

          <input type="checkbox" name="cc" value="200to300">
          <label for="">200cc - 300cc </label> <br> 

          <input type="checkbox" name="cc" value="300to500">
          <label for="">300cc - 500cc </label> <br>  

          <input type="checkbox" name="cc" value="500to1000">
          <label for="">500cc - 1000cc </label> <br> 

          <input type="checkbox" name="cc" value="1000above">
          <label for="">1000cc - Above </label> <br>               
        </fieldset>    
      </div>

      <div class="filterBrand">
          <p>Brand</p>
          <select name="brand" id="brand" onchange="modellist(this.options[this.selectedIndex].value);">
              <option value="">Select Brand</option>
              <option value="aprilia">Aprilia</option>
              <option value="bajaj">Bajaj Motorcycles</option>
              <option value="benelli">Benelli</option>
              <option value="bmw">BMW</option>
              <option value="cfmoto">CFMOTO</option>
              <option value="crossfire">CrossFire</option>
              <option value="ducati">Ducati</option>
              <option value="haojue">Haojue</option>
              <option value="hero">Hero</option>
              <option value="honda">Honda</option>
              <option value="husqvarna">Husqvarna</option>
              <option value="jawa">JAWA</option>
              <option value="kawasaki">Kawasaki</option>
              <option value="ktm">KTM</option>
              <option value="mahindra">Mahindra</option>
              <option value="mvagusta">MV Agusta</option>
              <option value="royalenfield">Royal Enfield</option>
              <option value="runner">Runner</option>
              <option value="suzuki">Suzuki</option>
              <option value="tvs">TVS</option>
              <option value="Yamaha">Yamaha</option>
          </select>
      </div>
  
      <div class="filterModel">
          <p>Model</p>
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
          <p>Model Year</p>
          <!-- min to max -->
      </div>

    </form>
    
    <button> Filter Results </button>

  </section>

  <section class="filterResults">
      <div class="vehicle">
          <div class="thumbnail_images"> 
              <img src="../images/1/1.jpg" alt="Image Link Broken" style="width:100%; height: 100%;" />
          </div>

          <div class="details">
              <span class="nameicon"> <i class="fa-solid fa-motorcycle"></i> </span>
              <span class="name">Bajaj Pulsar 250</span>

              <span class="distTravelledicon"> <i class="fas fa-tachometer-alt"></i> </span>
              <span class="distTravelled">6000 km</span>

              <span class="locatedicon"> <i class="fas fa-map-marker-alt"></i> </span>
              <span class="located"> Kathmandu </span>
                  
              <span class="ccicon"> <i class="fas fa-bolt"></i> </span>
              <span class="cc">125cc</span>

              <span class="priceicon"> <i class="fas fa-rupee-sign"></i> </span>
              <span class="price">31000</span>

              <a href="#" class="getvechicledetails"> Details </a>
          </div>
      </div>
  </section>
</article>