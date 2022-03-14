<section>
<table>
<tr><th>Vehicle Model</th><th>Brand</th><th>Distance Covered</th><th>CC</th><th>Price</th><th>Upload Date</th><th>Type</th><th>Approve/Reject</th></tr>
<?php
foreach($data as $value){
    echo '<tr><td>'.$value['modelName'].'</td><td>'.$value['brandName'].'</td><td>'.$value['distanceTravelled'].'</td><td>'.$value['cubicCapacity'].'</td><td>'.$value['price'].'</td><td>'.$value['vehiclePostDate'].'</td><td>'.$value['vehicleType'].'</td><td><a href=index.php?page=approvalView&vid='.$value['vehicleID'].'>View</a></td></tr>';
}
?>

</table>



</section>