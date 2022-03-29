<section>
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
    var options = {'title':'Average Bikes/Scooters on Sale', 'width':550, 'height':400};

    // Display the chart inside the <div> element with id="piechart"
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
}
</script>