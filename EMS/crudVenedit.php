<?php 
$con = mysqli_connect("localhost","root","","ems");
$id = $_GET['id_'];
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['emailid'];
    $mobile = $_POST['mobilenumber'];
    mysqli_query($con , "UPDATE `items` SET `FullName`='$name',`EmailId`='$email',`MobileNumber`='$mobile' WHERE id='$id'");
    header('location:crud.php');
    die();
    }
    $res = mysqli_query($con , "SELECT `id`, `FullName`, `EmailId`, `MobileNumber` FROM `tblvendor` WHERE $id");
    $row = mysqli_fetch_assoc($res);
    $name = $row['FullName'];
    $email= $row['EmailId'];
    $mobile = $row['MobileNumber'];
?>
<form action="" method="post">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" id="" value="<?php echo $name?>"> </td>
        </tr>
        <tr>
            <td>Email Id</td>
            <td><input type="email" name="emailid" id="" value="<?php echo $email?>"> </td>
        </tr>
        <tr>
            <td>Mobile Number</td>
            <td><input type="number" name="mobilenumber" id="" value="<?php echo $mobile?>"> </td>
        </tr>
        <tr >
            <td>
        <input type="submit" name="submit" value="Edit">
    </td>
        </tr>
    </table>
</form>