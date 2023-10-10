
<?php 
$con = mysqli_connect("localhost","root","","ems");
$id = $_GET['id_'];
mysqli_query($con , "DELETE FROM `items` WHERE id ='$id'");
header('location:VaddItem.php');
die();
?>

