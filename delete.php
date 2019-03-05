<?php session_start(); ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
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
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // set superglobal variable
        $row_name = $_GET['name'];
        
        //sql query
        $sql = "DELETE FROM person WHERE name = '$row_name'";


        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
        $conn->close();

        header('location:read.php');
        ?>
    </body>
</html>
