<?php
session_start();
error_reporting(0);
include('connect.php');
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{ 
    ?>
    <style>
button {
  background-color: red;
  color: black;
}

body {
  background-color: lightgrey;
}
</style>
    <?php 
    $con = mysqli_connect("localhost","root","","ems");
    $res = mysqli_query($con , "select * from user");
    ?>
    <button type="button" ><a href="adduser.php">Add Record</a></button>
    <table border="1"align="center" style="width:50%">
        <tr>
            <td>s.no</td>
            <td>Username</td>
            <td>Emailid</td>
            <td>Action</td>
        </tr>
        <?php
        $i = 1;
        while ($row=mysqli_fetch_assoc($res)) { ?>
            <tr>
            <td><?php echo $i?></td>
            <td><?php echo $row['username'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><a href="edituser.php?id =<?php echo $row['id']?>">Edit </a>&nbsp;
            <a href="deleteuser.php?id =<?php echo $row['id']?> ">Delete</a> 
        </td>
        </tr>
        <?php 
        $i++;
    } ?>
    </table>

<?php } ?>
