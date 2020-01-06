<?php

    $refToConnection = 
        mysqli_connect("localhost","root", "manager", "KuchTo");

    $result= mysqli_query($refToConnection, 
                "insert into Emp values(4, 'Manoj', 'Chennai')");

    
    echo "No of rows affected = "
            . mysqli_affected_rows($refToConnection);
    
    mysqli_close($refToConnection);
?>