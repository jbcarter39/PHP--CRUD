<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$o_name = $_POST['o-name'];
$name = $_POST['u-name'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];


$sql = "UPDATE person SET name='$name', gender='$gender', dob='$dob' WHERE name='$o_name'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

header('location:read.php');
mysqli_close($conn);
?>