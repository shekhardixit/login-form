<?php
include 'conn.php';
$id= $_GET['id'];
$q = " DELETE FROM `registration` WHERE id = $id";

mysqli_query($con, $q);
header('location:Display.php');
?>