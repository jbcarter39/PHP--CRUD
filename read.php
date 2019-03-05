<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CRUD</title>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Montserrat');

            h1{
                text-align: right;
                font-family: 'Montserrat', sans-serif;
                font-size: 1em;
                padding-right: 25px;
            }
            h2{
                text-align: center;
                font-family: 'Montserrat', sans-serif;
                font-size: 2em;

                padding-bottom: 75px;
                margin-bottom: -450px;
            }
            body{
                text-align: center;
                font-family: 'Montserrat', sans-serif;
                font-size: 1em;
            }
            .container{
                text-align: center;
                margin-left: 150px;
                top: 20px;
            }
            table {
                font-family: 'Montserrat', sans-serif;
                border-collapse: collapse;
                width: 90%;
            }
            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 4px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
            .wrapper {
                margin-top: 10px;
                text-align: right;
                padding-right: 25px;
            }
            .log-out{
                padding: 5px 25px;
                text-decoration: none;
                background-color: #43b4ec;
                border-width: 0;
                color: #fff;
                cursor: pointer;
                transition: background-color 200ms;
            }
            .log-out:hover {
                background-color: #63c7ef;
            }
            .insert{
                padding: 10px 20px;
                background-color: #43b4ec;
                border-width: 0;
                text-decoration: none;
                color: #fff;
                cursor: pointer;
                transition: background-color 200ms;
            }
            .insert:hover {
                background-color: #63c7ef;
            }
            .delete-cell{
                width: 5%;
            }
            .delete{
                color: red;
                text-decoration: none;
            }
            .delete:hover{
                color: #ffffff;
            }
            .delete-cell:hover{
                background-color: red;
            }
            .update-cell{
                width: 5%;
                background-color: #f9f9f9;
                text-decoration: none;
            }
            .update{
                color: #124aa5;
                text-decoration: none;
            }
            .update:hover{
               color: #ffffff; 
            }
            .update-cell:hover {
                background-color: #7c7b8c;
                text-decoration: none;
            }
        </style>
    </head>
    <body>

        <?php
        //make sure the user is in the session
        if (isset($_SESSION['user'])) {
            $username = $_SESSION['user'];
        } else {
            header("location:login.php");
        }

        echo '<h1><i class="fa fa-user-circle"></i>User: ' . $_SESSION['user'] . '</h1><br>';
        echo '<div class="wrapper">';
        ?>

        <a class="log-out" href="logout.php" onclick="return confirm('Are you sure you want to log out?')">Logout</a>

        <?php
        echo '</div>';
        echo '<h2>Product Database</h2>';





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

        $sql = "SELECT name, gender, dob FROM person";
        $result = $conn->query($sql);

        echo '<div class="container">';
        echo '<table>';
        echo '<tr>';
        echo '<th>Name</th>';
        echo '<th>Gender</th>';
        echo '<th>DOB</th>';
        echo '<th></th>';
        echo '<th></th>';
        echo '</tr>';
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $del_name = $row["name"];
                $row_gender = $row["gender"];
                $row_dob = $row["dob"];
                
                echo '<tr>';
                echo '<td>' . $row["name"] . '</td>';
                echo '<td>' . $row["gender"] . '</td>';
                echo '<td> ' . $row["dob"] . '</td>';
                echo "<td class='update-cell'> <a class='update' href='info.php?name=" . $del_name . "'>Update</a></td><br>";
                echo "<td class='delete-cell'> <a class='delete' href='delete.php?name=" . $del_name . "'>Delete</a></td><br>";
                echo '</tr>';
            }
        } else {
            echo "0 results";
        }
        echo '</table>';
        echo '</div><br>';
        echo "<a class='insert' href='insert.php'>Insert</a><br>";

        $conn->close();
        ?>
    </body>
</html>
