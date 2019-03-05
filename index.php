<?php
session_start();

//make sure the user is in the session
if (isset($_SESSION['user'])) {
    $username = $_SESSION['user'];
} else {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CRUD</title>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Montserrat');
            h1{
                text-align: center;
                font-family: 'Montserrat', sans-serif;
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


        <h1>Welcome <?= $username ?></h1><br>


        <form action="read.php" method="get"> 
            <div class="submit">
                <input class="submit-button" type="submit" value="Continue">
            </div>
        </form>



    </body>
</html>
