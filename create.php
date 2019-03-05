<?php session_start();

//make sure the user is in the session
if (isset($_SESSION['user'])) {
    $username = $_SESSION['user'];
} else {
    header("location:login.php");
}

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

//define post variables
$name = $_POST['name'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];

//sql query
$sql = "INSERT INTO person (name, gender, dob)
VALUES ('$name', '$gender', '$dob')";

//set session variables
$_SESSION['name'] = $name;
$_SESSION['gender'] = $gender;
$_SESSION['dob'] = $dob;

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

header('location:read.php');

?>
