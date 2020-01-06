<?php
    if(isset($_POST["btnLogin"]))
    {
        if($_POST["uname"] == "abc")
        {
            
            session_start();
            $_SESSION["MyLoginSession"] = $_POST["uname"];

            //echo "Welcome User";
            //header("location:25Demo.php?uname=" .$_POST["uname"]);
            header("location:25Demo.php");
        }
        else
        {
            echo "Uname is incorrect";
        }
    }
    else
    {
        echo "Login Here:";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Login</title>
</head>
<body>
    <form action="24Demo.php" method="post">
        <input type="text" name="uname" id="uname">
        <input type="password" name="password" id="password">
        <input type="submit" name="btnLogin" value="Login">
    </form>
</body>
</html>