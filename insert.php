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
            p{
                font-family: 'Montserrat', sans-serif;
                text-align: center;
                font-size: 25px;
            }
            body{
                font-family: 'Montserrat', sans-serif; 
            }
            .text {
                margin-bottom: 10px;
                width: 15%;
                display: inline-block;
            }
            .submit {
                margin-top: 30px;
                text-align: center;
            }
            .submit-button {
                padding: 10px 20px;
                background-color: #43b4ec;
                border-width: 0;
                color: #fff;
                cursor: pointer;
                transition: background-color 200ms;
            }
            .submit-button:hover {
                background-color: #63c7ef;
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
        echo '<p>Enter Table Data</p>';

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "college";


        $name = $gender = $dob = '';
// Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        echo '<div class="submit">';
        echo '<form action="create.php" method="post">';
        echo 'Name <input class="text" type="text" name="name"><br>';
        echo 'Gender <input class="text" type="text" name="gender"><br>';
        echo 'Date of Birth <input class="text" type="date" name="dob"><br><br>';
        echo '<input class="submit-button" type="submit">';
        echo '</form>';
        echo '</div>';





        mysqli_close($conn);
        ?>
    </body>
</html>
