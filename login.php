<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>CRUD</title>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Montserrat');
            h1{
                text-align: center;
                font-family: 'Montserrat', sans-serif;
            }
            h3 {
                color: red;
                text-align: center;
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
        <h1>Login</h1>
        <?php
        if (isset($_SESSION['msg'])) {
            echo '<h3>';
            echo $_SESSION['msg'];
            echo '</h3>';
            //unset $_SESSION['msg']
            $_SESSION['msg'] = '';
        }
        ?>
        <div class="submit">
            <form action="authentication.php" method="post">
                Username: <input class="text" type="text" name="user"><br>
                Password: <input class="text" type="password" name="pwd" value="secret"><br>
             
                <p>The pwd is "secret"</p>
                <input class="submit-button" type="submit">
            </form>
        </div>
    </body>

</html>


