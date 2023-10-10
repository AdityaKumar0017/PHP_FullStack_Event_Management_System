<?php 
$con = mysqli_connect("localhost","root","","ems");
$id = $_GET['id_'];
mysqli_query($con , "DELETE FROM `vendorlogin` WHERE id ='$id'");
header('location:vendormanage.php');
die();
?>