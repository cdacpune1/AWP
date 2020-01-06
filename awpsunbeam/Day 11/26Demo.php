<?php
    session_start();
    unset($_SESSION["MyLoginSession"]);
    header("Location:25Demo.php")
?>