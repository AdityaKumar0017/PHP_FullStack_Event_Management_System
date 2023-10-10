
<?php 
$con = mysqli_connect("localhost","root","","ems");
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['emailid'];
    mysqli_query($con ,"INSERT INTO `user`(`username`, `email`) VALUES ('$name','$email')");
    header('location:manageuser.php');
    die();
}
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
            <td><input type="text" name="name" id=""> </td>
        </tr>
        <tr>
            <td>Email Id</td>
            <td><input type="email" name="emailid" id=""> </td>
        </tr>
        <tr >
            <td>
        <input type="submit" name="submit" value="Add user ">
    </td>
        </tr>
    </table>
</form>