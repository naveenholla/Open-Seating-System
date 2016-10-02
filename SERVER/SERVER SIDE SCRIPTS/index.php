<?php
session_start();
?>
<!Doctype html>
<html lang="en">

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
	<div class="preloader">
		<img src="img/loader.gif" alt="Preloader image">
	</div>
	
	<header id="intro" >
		<div class="container">
			<div class="table">
				<div class="header-text">
					<div class="row">
						<div class="col-md-12 text-center">
						<?php
					
							if(isset($_SESSION['status']))
							{
							echo '<h3 class="light white">'.$_SESSION['status'].'</h3>';
							session_unset();
							}
							else{
								session_unset();
							 ?>
							<h3 class="light white">Welcome to Honeywell.</h3>
							<h3 class="white typed">Click on search menu to find your colleague</h3>
							<span class="typed-cursor">|</span>
						</div>
						<?php }?>
					</div>
					
				<form action="Search.php" method="Post" name="searchForm">
				<div class="container">
					<div class="row">
       					<div class="col-sm-6 col-sm-offset-3">
           					<div id="imaginary_container"> 
				                <div class="input-group stylish-input-group">
						                    <input type="text" class="form-control"  name="ename" placeholder="Search" >
                   							<span class="input-group-addon" onclick="searchForm.submit()" style="cursor: pointer;">
	                   					    <!-- <button type="submit"> -->
					                            <!--<span class="glyphicon glyphicon-search"></span-->
					                            <i class="fa fa-search" aria-hidden="true"></i>
    	               			    		<!-- </button>   -->
				                    </span>
				                </div>
				            </div>
				        </div>
					</div>
				</div>
				</form>
			
				</div>
			</div>
			<p style="position:absolute;bottom:0;left:03;" class="col-sm-8" >&copy; 2016 All Rights Reserved. Powered by MRX </a></p><

		</div>
		
					
	</header>
	

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
