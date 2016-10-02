<?php

require_once ("allphp.php");
    
    $conn= StartConnection();
    $eid=$_POST['eid'];
    $smac=$_POST['smac'];
    $desg=$_POST['desg'];
    $name=$_POST['ename'];
    $mob=$_POST['mob'];
    
 
    $sql="INSERT INTO `honeywell`.`employees` (`E_ID`, `E_MAC`, `DESIGNATION`, `E_NAME`, `MOBILE`) VALUES (NULL, '$smac', '$desg', '$name', '$mob')";
    
    
    if ($conn->query($sql) === TRUE)
    {
        echo "successful";
    }
    else
    {
        echo "failed";
    }



