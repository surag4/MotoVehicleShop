<?php
$title = "Cart";
$conn = new DatabaseTable('shortlist');
$shortlisted = $conn->shortlistVecList($_SESSION['userID']);

$content = loadTemplate('../templates/users/CartTemplate.php', ["shortlisted"=>$shortlisted]);

?>