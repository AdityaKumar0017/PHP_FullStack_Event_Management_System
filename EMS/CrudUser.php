<?php 
$con = mysqli_connect("localhost","root","","ems");
if (isset($_POST['submit'])) {
    $ItemId = $_POST['SerialNo'];
    $ItemName = $_POST['GuestName'];
    mysqli_query($con , "INSERT INTO `guestlist`(`SerialNo`, `GuestName`) VALUES ('$ItemId', '$ItemName')");
    header('location:UserGuestList.php');
    die();
}
?>
<form action="" method="post">
    <table>
        <tr>
            <td>Item Id</td>
            <td><input type="number" name="SerialNo" id=""> </td>
        </tr>
        <tr>
            <td>Item Name</td>
            <td><input type="text" name="GuestName" id=""> </td>
        </tr>
        <tr >
            <td>
        <input type="submit" name="submit" value="Add Item ">
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