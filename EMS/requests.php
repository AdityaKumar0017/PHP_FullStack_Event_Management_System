<?php 
$con = mysqli_connect("localhost","root","","ems");
if (isset($_POST['submit'])) {
    $ItemId = $_POST['id'];
    $ItemName = $_POST['user'];
    $Comment = $_POST['comment'];

    mysqli_query($con , "INSERT INTO `requests`(`id`, `user`, `comment`) VALUES ('$ItemId', '$ItemName', '$Comment')");
    header('location:VTransaction.php');
    die();
}
?>
<form action="" method="post">
    <table>
        <tr>
            <td>Id</td>
            <td><input type="number" name="id" id=""> </td>
        </tr>
        <tr>
            <td>User Name</td>
            <td><input type="text" name="user" id=""> </td>
        </tr>
        <tr>
            <td>Request</td>
            <td><input type="text" name="comment" id=""> </td>
        </tr>
        <tr >
            <td>
        <input type="submit" name="submit" value="Add Request ">
    </td>
        </tr>
    </table>
</form>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>..
    </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.min.css">
</head>
<body>
    
</body>
</html>