<?php
$title = "Cart";
$conn = new DatabaseTable('shortlist');
$shortlisted = $conn->getShortListed($_SESSION['userID']);

$content = loadTemplate('../templates/users/CartTemplate.php', ["shortlisted"=>$shortlisted]);

?>