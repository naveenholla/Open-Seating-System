<?php

require_once ("allphp.php");
    
    $conn= StartConnection();
    $name=$_POST['ename'];

    
 
    $sql="SELECT * FROM `honeywell`.`employees`WHERE `E_NAME` LIKE '$name'";
    
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
             // output data of each row
             while($row = $result->fetch_assoc()) {
                 $smac=$row['E_MAC'];
                 #echo $smac;
             }
         $sql2="SELECT * FROM `honeywell`.`lookup` WHERE `C_MAC` LIKE '$smac'";
         $result2 = $conn->query($sql2);   
         if ($result2->num_rows > 0) {
             // output data of each row
             while($row = $result2->fetch_assoc()) {
                 $rmac=$row['R_MAC'];
                 $ip=$row['C_IP'];
                 #echo "$ip";
                 #echo $rmac;
                 $sql3="SELECT * FROM `honeywell`.`routerinfo` WHERE `MAC` LIKE '$rmac'";
                 $result3 = $conn->query($sql3);   
                 if ($result3->num_rows > 0) {
                    while($row = $result3->fetch_assoc()) {
                        $GLOBALS['floor']=$row['FLOOR'];
                        $GLOBALS['block']=$row['BLOCK'];
                        $GLOBALS['pill']=$row['PILLAR'];
                        //echo " isAlive function returns -".isAlive($ip);
                       /* if(isAlive($ip)){*/

                        //echo "$name is in $floor floor $block block, near $pill pillar!";
                        /*else{
                            echo "Sorry Employee not available!\n";
                        }*/
                 }
             }
                 else
                 {
                    echo "routeinfo failed";
                 }

             }
        }else
            {
                echo "Router problem";
            }
        }
    else
    {
        echo "failed";
    }


                        <script type="text/javascript">var floor = "<?= $floor ?>"; var block ="<?= $block ?>"; var pillar ="<?= $pill?>"</script>
                        <script type="text/javascript" src="index.php"></script>
