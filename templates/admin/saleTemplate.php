<section>
    <table>
    <tr><th>Vehicle Model</th><th>Brand</th><th>Distance Covered</th><th>CC</th><th>Price</th><th>Upload Date</th><th>Type</th><th>View Details</th> <th>Sale Status</th></tr>
    <?php
    foreach($onsaledata as $value){
        echo '<tr><td>'.$value['modelName'].'</td><td>'.$value['brandName'].'</td><td>'.$value['distanceTravelled'].'</td><td>'.$value['cubicCapacity'].'</td><td>'.$value['price'].'</td><td>'.$value['vehiclePostDate'].'</td><td>'.$value['vehicleType'].'</td><td><a href=index.php?page=viewvec&vid='.$value['vehicleID'].'&ermsg=0>View</a></td><td><a href="index.php?page=sale&rcid='.$value['categoryID'].'" class="getvechicledetails"> Remove From Premium </a></td></tr>';
    }
    ?>
    </table>

    <table>
    <tr><th>Vehicle Model</th><th>Brand</th><th>Distance Covered</th><th>CC</th><th>Price</th><th>Upload Date</th><th>Type</th><th>View Details</th> <th>Sale Status</th></tr>
    <?php
    foreach($offsaledata as $value){
        echo '<tr><td>'.$value['modelName'].'</td><td>'.$value['brandName'].'</td><td>'.$value['distanceTravelled'].'</td><td>'.$value['cubicCapacity'].'</td><td>'.$value['price'].'</td><td>'.$value['vehiclePostDate'].'</td><td>'.$value['vehicleType'].'</td><td><a href=index.php?page=viewvec&vid='.$value['vehicleID'].'&ermsg=0>View</a></td><td><a href="index.php?page=sale&cid='.$value['categoryID'].'" class="getvechicledetails"> Make It Premium </a></td></tr>';
    }
    ?>
    </table>
</section>