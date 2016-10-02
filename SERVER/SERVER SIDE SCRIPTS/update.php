<?php

require_once ("allphp.php");
    
    $conn= StartConnection();
    $rmac=$_POST['rmac'];
    $smac=$_POST['smac'];
    $sip=$_POST['sip'];
    

 
    $sql="INSERT INTO `honeywell`.`lookup` (`R_MAC`, `C_MAC`, `C_IP`) VALUES ('$rmac', '$smac', '$sip')";
    
    
    if ($conn->query($sql) === TRUE)
    {
        echo "successful";
    }
    else
    {
        echo "failed";
/*$postParams = @{rmac='00:A0:C9:14:C8:67';smac='01:A0:C9:14:C8:39';sip='192.168.1.7';}
        Invoke-WebRequest -Uri http://localhost/honeywell/index.php -Method POST -Body $postParams*/

       /* Proper code for post data
        $postParams = @{rmac='00:A0:C9:14:C8:67';smac='01:A0:C9:14:C8:39';sip='192.168.1.7'}
        Invoke-WebRequest -Uri http://localhost/honeywell/index.php -Method POST -Body $postParams
*/
    }



