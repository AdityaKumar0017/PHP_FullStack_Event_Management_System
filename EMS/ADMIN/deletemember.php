<?php 
$con = mysqli_connect("localhost","root","","ems");
$id = $_GET['id_'];
mysqli_query($con , "DELETE FROM `adminmember` WHERE id ='$id'");
header('location:managemember.php');
die();
?>