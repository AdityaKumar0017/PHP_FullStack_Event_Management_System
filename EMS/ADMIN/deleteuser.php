<?php 
$con = mysqli_connect("localhost","root","","ems");
$id = $_GET['id_'];
mysqli_query($con , "DELETE FROM `user` WHERE id ='$id'");
header('location:manageuser.php');
die();
?>