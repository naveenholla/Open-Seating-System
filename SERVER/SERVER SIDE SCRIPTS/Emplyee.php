<?php

require_once ("allphp.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $conn= StartConnection();
    $eid=$_POST['eid'];
    $smac=$_POST['smac'];
    $desg=$_POST['desg'];
    $name=$_POST['ename'];
    $dept=$_POST['dept'];
    $now = new DateTime();
    $now->format('Y-m-d H:i:s');    // MySQL datetime format
    $time=$now->getTimestamp();
 
    $sql="INSERT INTO `honeywell`.`employees` (`E_ID`, `E_MAC`, `DESIGNATION`, `E_NAME`, `DEPARTMENT`,`Time`) VALUES (NULL, '$smac', '$desg', '$name', '$dept',$time)";
    
    
    if ($conn->query($sql) === TRUE)
    {
        echo "successful";
    }
    else
    {
        echo "failed";
    }
}


