<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Honeywell</title>
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
    <link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="img/favicons/manifest.json">
    <link rel="shortcut icon" href="img/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#00a8ff">
    <meta name="msapplication-config" content="img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Normalize -->
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <!-- Owl -->
    <link rel="stylesheet" type="text/css" href="css/owl.css">
    <!-- Animate.css -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/css/font-awesome.min.css">
    <!-- Elegant Icons -->
    <link rel="stylesheet" type="text/css" href="fonts/eleganticons/et-icons.css">
    <!-- Main style -->
    <link rel="stylesheet" type="text/css" href="css/cardio.css">
</head>
<body>
<footer>
<?php

require_once ("allphp.php");
    
    $conn= StartConnection();

    
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['ename'])) {

    $name = $_POST['ename'];
    
    $sql="SELECT * FROM `honeywell`.`employees`WHERE `E_NAME` LIKE '$name'";
    
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
             // output data of each row
             while($row = $result->fetch_assoc()) {
                 $smac=$row['E_MAC'];
                 $dept=$row['DEPARTMENT'];
                 $time=$row['Time'];
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
                        $floor=$row['FLOOR'];
                        $block=$row['BLOCK'];
                        $pillar=$row['PILLAR'];
                        if(isAlive($ip)){
                    #echo "$name is in $floor floor $block block near $pillar pillar!";
                echo ' <div class="container">
            <div class="row">
                <div class="col-sm-6 text-center-mobile">
                    <h3 class="white">Search result:<span class="open-blink"></span></h3>

                    <br>
                    <br>
                    <br>
                    <br>
                    <h5 class="light regular light-white">Name</h5>
                    <h3 class="regular white" id=name>'.$name.'</h3>
                </div>
                <div class="col-sm-6 text-center-mobile">
                    
                    <div class="row opening-hours">
                    <h3 class="light regular light-white">.......Position Specifications......</h3>
                    <br>
                        <div class="col-sm-6 text-center-mobile">
                            <h5 class="light-white light">Floor</h5>
                            <h3 class="regular white" id=floor>'.$floor.'</h3>
                        </div>
                        <div class="col-sm-6 text-center-mobile">
                            <h5 class="light-white light">Block</h5>
                            <h3 class="regular white" id=block>'.$block.'</h3>
                        </div>
                        <div class="col-sm-6 text-center-mobile">
                            <h5 class="light-white light">Pillar</h5>
                            <h3 class="regular white" id=pillar>'.$pillar.'</h3>
                        </div>
                            <div class="col-sm-6 text-center-mobile">
                            <h5 class="light-white light">Department</h5>
                            <h3 class="regular white" id=department>'.$dept.'</h3>
                        </div>
                        </div>
                            <div class="col-sm-6 text-center-mobile">
                            <h5 class="light-white light">Connected At</h5>
                            <h3 class="regular white" id=department>'.$time.'</h3>
                        </div>
                    </div>
                </div>
            </div>';}
                
                        /*else{
                            echo "Sorry Employee not available!\n";
                        }*/
                 }
             }
                 else
                 {
                   # echo "routeinfo failed";
                    session_start();
                    $_SESSION['status'] = "Sorry, Router problem";
                    header("location:index.php");
                 }

             }
        }else
            {
               # echo "Router problem";
                session_start();
                $_SESSION['status'] = "Sorry , ".$name."  Not Connnected! \n";
                header("location:index.php");
            }
        }
    else
    {
       session_start();
       $_SESSION['status'] = "INVALID NAME";
        header("location:index.php");
    }
}

?>

   
            <div class="row bottom-footer text-center-mobile">
                <div class="col-sm-8">
                    <p>&copy; 2016 All Rights Reserved. Powered by MRX </a></p>
                </div>
            </div>
        </div>
    </footer>
        <!-- Holder for mobile navigation -->
    <div class="mobile-nav">
        <ul>
        </ul>
        <a href="#" class="close-link"><i class="arrow_up"></i></a>
    </div>
    <!-- Scripts -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/typewriter.js"></script>
    <script src="js/jquery.onepagenav.js"></script>
    <script src="js/main.js"></script>
</body>
</html>