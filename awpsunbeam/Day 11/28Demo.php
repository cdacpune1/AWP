
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
    $refToMySQLConnection= mysqli_connect("localhost","root","manager","KuchTo");

    $refToRecords = mysqli_query($refToMySQLConnection,"select * from Emp");
    echo    '<table style="height:300px; width:300px" border="1">';
     
    while ($currentRow= mysqli_fetch_row($refToRecords)) 
    {
        echo '<tr>'. 
                '<td>'. $currentRow[0] .'</td>'. 
                '<td>'. $currentRow[1] .'</td>'. 
                '<td>'. $currentRow[2] .'</td>'. 
            '</tr>'; 
    }

    echo    '</table>';

    mysqli_close($refToMySQLConnection);
?>
</body>
</html>