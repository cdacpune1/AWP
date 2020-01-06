<?php

    if(isset($_POST["btnCreate"]))
    {
        $no = $_POST["ENo"];
        $name = $_POST["EName"];
        $Address = $_POST["EAddress"];

        $query = "insert into Emp values(" 
                                        . $no . 
                                        ", '" . $name . "', 
                                        '". $Address ."')";

        //echo $query;
        $refToConnection = mysqli_connect("localhost","root", "manager", "KuchTo");

        
        $result= mysqli_query($refToConnection,$query );

    
        $rowsAffected = mysqli_affected_rows($refToConnection);

        echo "No of rows affected = ". $rowsAffected;
        
        mysqli_close($refToConnection);
           
        if($rowsAffected > 0)
        {
            header("location:28Demo.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Record</title>
</head>
<body>
    <form action="30Demo.php" method="post">
        No: <input type="number" name="ENo" id="ENo" required="required"><br/>
        Name: <input type="text" name="EName" id="EName" required="required"><br/>
        Address: <input type="text" name="EAddress" id="EAddress" required="required"><br/>
        <input type="submit" name="btnCreate" id="btnCreate" value="Register">
    </form>
</body>
</html>