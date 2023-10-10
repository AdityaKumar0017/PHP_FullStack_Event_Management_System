<?php 
// include('connect.php');
$con = mysqli_connect("localhost","root","","ems");
$res = mysqli_query($con , "select * from items")
?>
<button type="button" ><a href="crudVenadd.php">Add Record</a></button>
<table border="1">
    <tr>
        <td>s.no</td>
        <td>Name</td>
       
    </tr>

    <?php
    $i = 1;
    while ($row=mysqli_fetch_assoc($res)) { ?>
        <tr>
        <td><?php echo $i?></td>
        <td><?php echo $row['ItemName'] ?></td>
        <td><a href="crudVendel.php?id =<?php echo $row['Id']?> ">Delete</a>
        
    </td>
    </tr>
    <?php 
    $i++;
} ?>
</table>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>..</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.min.css">
</head>
<body>
    
</body>
</html>