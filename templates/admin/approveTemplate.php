<section>
<table>
<tr><th>Vehicle Name</th><th>Distance Covered</th><th>CC</th><th>Price</th><th>Upload Date</th><th>Type</th><th>Brand</th><th>Model</th><th>Approve/Reject</th></tr>
<?php
foreach($data as $value){
echo '<tr><td>'.$value['vec_name'].'</td><td>'.$value['vec_distance'].'</td><td>'.$value['vec_engine'].'</td><td>'.$value['vec_price'].'</td><td>'.$value['vec_upload_date'].'</td><td>'.$value['type'].'</td><td>'.$value['vec_brand'].'</td><td>'.$value['vec_model'].'</td><td><a href=index.php?page=approvalView&vid='.$value['vec_id'].'>View</a></td></tr>';

}
?>

</table>



</section>