<?php 
    $refToMySQLConnection= mysqli_connect("localhost","root","manager","KuchTo");

    $refToRecords = mysqli_query($refToMySQLConnection,"select * from Emp");
    $data = '[' ;
    
    while ($currentRow= mysqli_fetch_row($refToRecords)) 
    {
        
        $data = $data . '{"No":'. $currentRow[0].', "Name": "'.$currentRow[1].'", "Address": "'.$currentRow[2].'" },';
    }
    $changedData =  rtrim($data,',');
    $changedData = $changedData .']'; 

    mysqli_close($refToMySQLConnection);

    header('Content-Type:application/json');
    echo $changedData;
?>
