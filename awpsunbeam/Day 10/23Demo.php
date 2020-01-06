<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 

        //$name = $_REQUEST["fname"];
        
        if(isset($_POST["btnSubmit"]))
        {
            $name = $_POST["fname"];
            echo "<table border='1'><tr><td>" . 
                    $name  .  
                  "</td></tr></table>";
        }
        else{
            // echo "<h1>Pls come through proper channel</h1>";

            //echo "<a href='04Demo.html'> Click here to go to legal page </a>";

            header("location:04Demo.html");
        }

        
        //print_r($_REQUEST);

        //echo "Hello " . $_REQUEST["fname"];

        //echo "hello from server";   
        // echo 'Hello from php handler';
        // echo '<h1>Hello from php handler</h1>';

        // $_s1 = "hello";
        // $s1 = "Hello";
        // $s2 = "world";
        // echo $s1 . $s2;

     //phpinfo();
    ?>
</body>
</html>