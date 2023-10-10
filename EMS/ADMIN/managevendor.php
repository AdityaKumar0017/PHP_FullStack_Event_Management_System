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
    $res = mysqli_query($con , "select * from vendorlogin");
    ?>
    <button type="button" ><a href="addvendor.php">Add Record</a></button>
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
            <td><a href="editvendor.php?id =<?php echo $row['id']?>">Edit </a>&nbsp;
            <a href="deletevendor.php?id =<?php echo $row['id']?> ">Delete</a> 
        </td>
        </tr>
        <?php 
        $i++;
    } ?>
    </table>

<?php } ?>
