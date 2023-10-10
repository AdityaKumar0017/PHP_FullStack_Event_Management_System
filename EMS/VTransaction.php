<?php 
// include('connect.php');
$con = mysqli_connect("localhost","root","","ems");
$res = mysqli_query($con , "select * from requests")
?>
<button type="button" ><a href="requests.php">Click to add request.</a></button>
<table border="1">
    <tr>
        <td>S.no</td>
        <td>Request</td>
       
    </tr>

    <?php
    $i = 1;
    while ($row=mysqli_fetch_assoc($res)) { ?>
        <tr>
        <td><?php echo $i?></td>
        <td><?php echo $row['user'] ?></td>
        <td><?php echo $row['comment'] ?></td>
        <td><a href="rewDel.php?id =<?php echo $row['id']?> ">Delete</a>
        
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