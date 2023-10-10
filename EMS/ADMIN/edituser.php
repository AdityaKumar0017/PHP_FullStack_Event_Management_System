
<?php 
$con = mysqli_connect("localhost","root","","ems");
$id = $_GET['id_'];
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['emailid'];
    $mobile = $_POST['mobilenumber'];
    mysqli_query($con , "UPDATE `user` SET `username`='$name',`email`='$email' WHERE id='$id'");
    header('location:manageuser.php');
    die();
    }
    $res = mysqli_query($con , "SELECT  `id` , `username`, `email` FROM `user` WHERE id= '$id'");
    $row = mysqli_fetch_assoc($res);
    $name = $row['username'];
    $email= $row['email'];
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
<form action="" method="post">
    <table align="center" style="width:50%">
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" id="" value="<?php echo $name?>"> </td>
        </tr>
        <tr>
            <td>Email Id</td>
            <td><input type="email" name="emailid" id="" value="<?php echo $email?>"> </td>
        </tr>
                <tr >
            <td>
        <input type="submit" name="submit" value="Edit">
    </td>
        </tr>
    </table>
</form>