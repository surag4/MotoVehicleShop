<article class="filterResults">
    <section class="filterSelections">
        <h3> Filters </h3>

        <form id="formname" name="formname" method="post" action="submitform.asp" >
        <div class="filterPrice">
            <p> Price </p>
            <!-- min to max -->
        </div>

        <div class="filterDist">
            <p> Kilometer Driven </p>
            <!-- min to max -->
        </div>

        <div class="filterCC">
            <p> Engine Displacement (CC) </p>
            <!-- checkbox -->
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

    </section>
</article>