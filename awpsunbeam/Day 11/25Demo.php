<?php
    //if(isset($_GET["uname"]))
    if(isset($_POST["btnLogOut"]))
    {
        session_start();
        unset($_SESSION["MyLoginSession"]);
        header("Location:25Demo.php");
    }
    else
    {
        session_start();
        if(isset($_SESSION["MyLoginSession"]))
        {
            echo  "Welcome" .  $_SESSION["MyLoginSession"] ." to Safe and Secure Page!";
        }
        else
        {
            header("location:24Demo.php");
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Safe Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script>
        function myfunction()
        {
            window.location.href="26Demo.php";
        }
    </script>
</head>
<body>
    <form action="25Demo.php" method="POST">
        <!-- <a href="26Demo.php">Logout</a> -->
           <!-- <input type="submit" name="btnLogOut" value="Log out">       -->
        <input type="button" name="btnLogOut" id="btn" value="Logout" onclick="myfunction()">
    </form>
</body>
</html>






