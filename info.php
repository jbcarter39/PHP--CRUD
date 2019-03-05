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
                margin-bottom: -200px;
            }
            p{
                font-family: 'Montserrat', sans-serif;
                text-align: center;
                font-size: 25px;
            }
            body{
                text-align: center;
                font-family: 'Montserrat', sans-serif;
                font-size: 1em;
            }
            .container{
                text-align: center;
                margin-left: 420px;
            }
            table {
                font-family: 'Montserrat', sans-serif;
                border-collapse: collapse;
                width: 60%;   
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
            
            .submit{
                padding: 10px 20px;
                margin-top: 20px;
                background-color: #43b4ec;
                border-width: 0;
                text-decoration: none;
                color: #fff;
                cursor: pointer;
                transition: background-color 200ms;
            }
            .submit:hover {
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
        
        $row_name = $_GET['name'];
        
        echo '<h1><i class="fa fa-user-circle"></i>User: ' . $_SESSION['user'] . '</h1><br>';
        echo '<div class="wrapper">'; ?>
        
        <a class="log-out" href="logout.php" onclick="return confirm('Are you sure you want to log out?')">Logout</a>
        
            <?php echo '</div>';
        echo '<p>Enter Update Data for '. $row_name .'</p>';
        
        
        
        ?>
        <div class="container">
        <table>
            <tr>
                <th>Name</th>
                <th>Gender</th>
                <th>Date of Birth</th>
            </tr>
            <tr>
                <form action="update.php" method="POST">
                    <td><input type="text" name="u-name" value="<?php echo $row_name; ?>"></td>
                    <td><input type="text" name="gender"></td>
                    <td><input type="date" name="dob"></td>
               
            </tr>
            
            
        </table>
        </div>
        <input type="hidden" name='o-name' value="<?= $row_name ?>">
        <input class="submit" type="submit">
        </form>
        
        
        
        
        
        
       




    </body>

</html>


