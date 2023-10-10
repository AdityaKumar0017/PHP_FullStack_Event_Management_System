<?php 

?>
<?php 
$con = mysqli_connect("localhost","root","","ems");
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['emailid'];
    $mobile = $_POST['mobilenumber'];
    mysqli_query($con , "INSERT INTO `adminmember`(`FullName`, `EmailId`, `MobileNumber`) VALUES ('$name','$email','$mobile')");
    header('location:managemember.php');
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
        <tr>
            <td>Mobile Number</td>
            <td><input type="number" name="mobilenumber" id=""> </td>
        </tr>
        <tr >
            <td>
        <input type="submit" name="submit" value="Add member ">
    </td>
        </tr>
    </table>
</form>