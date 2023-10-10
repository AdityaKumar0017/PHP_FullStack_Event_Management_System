
<?php 
$con = mysqli_connect("localhost","root","","ems");
$id = $_GET['id_'];
mysqli_query($con , "DELETE FROM `requests` WHERE id ='$id'");
header('location:VTransaction.php');
die();
?>

