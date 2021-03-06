<section class="adminndashboard">
    <?php 
        $bikecount = 0;
        $scootercount = 0;
        foreach($vectype as $value){
            if ($value['vehicleType']=="Bike") {
                $bikecount=$bikecount+1;
            } else {
                $scootercount = $scootercount+1;
            }
    }
    ?>
    <div id="piechart"></div>
    <div class="barchart"><canvas id="myChart" style="width:650px;max-width:1000px;height:500px;"></canvas></div>

    <?php 
    $monthName = array();
    $registeredno = array();
    foreach ($newuser as $monthnum) {
        $monthName[] = $monthnum['Month'];
        $registeredno[] = $monthnum['Total'];
      };
    ?>
</section>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
    // Load google charts
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    // Draw the chart and set the chart values
    function drawChart() {
    var data = google.visualization.arrayToDataTable([
    ['Task', 'Hours per Day'],
    ['Bike',    <?php echo $bikecount; ?>],
    ['Scooter', <?php echo $scootercount; ?>]
    ]);

    // Optional; add a title and set the width and height of the chart
    var options = {'title':'Average Bikes/Scooters on Sale', 'width':750, 'height':600};

    // Display the chart inside the <div> element with id="piechart"
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
}

var xValues = [<?php foreach ($monthName as $monthnam) { echo '"'.$monthnam.'",'; } ?>];
var yValues = [<?php foreach ($registeredno as $monthlycount) { echo $monthlycount.', '; } ?>,0];
var barColors = ["red", "green","blue","orange","brown", "DarkCyan", "FloralWhite", "YellowGreen"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Number of users joined in a month for year 2022"
    }
  }
});
</script>