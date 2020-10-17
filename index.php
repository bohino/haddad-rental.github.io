<?php 
session_start();
include('includes/config.php');
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Le système de gestion de location de voitures</title>
    <meta name="keywords" content="" />
	<meta name="description" content="" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/styl.css" rel="stylesheet">
    <link href="assets/css/templatemo_style.css" rel="stylesheet">
    <link href="assets/css/circle.css" rel="stylesheet">
    <link href="assets/css/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/templatemo_misc.css">
    <link rel="stylesheet" href="assets/css/nivo-slider.css">
    <link rel="stylesheet" href="assets/css/slimbox2.css" type="text/css" media="screen" /> 
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/swipebox.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
    <link rel="apple-touch-icon-precomposed" sizes="144x14" href="assets/images/favicon-icon/log.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="50x50" href="assets/images/favicon-icon/log.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="200x200" href="assets/images/favicon-icon/log.jpg">
    <link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/log.jpg">
    <link rel="shortcut icon" href="assets/images/favicon-icon/log.jpg">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,600' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/JavaScript" src="assets/js/slimbox2.js"></script> 

    
    <link rel="stylesheet" type="text/css" href="assets/css/ddsmoothmenu.css" />
	  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
	  <script type="text/javascript" src="assets/js/ddsmoothmenu.js"></script>


    <script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_flicker", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>
<style type="text/css">

#slider {
	overflow: hidden;
}
#slider figure {
	position: relative;
	width: 500%;
	margin: 0;
	left: 0;
	animation: 20s slider infinite;
}
#slider figure img {
	float: left;
	width: 20%;
}

@keyframes slider {
	0% {
		left: 0;
	}
	20% {
		left: 0;
	}
	25% {
		left: -100%;
	}
	45% {
		left: -100%;
	}
	50% {
		left: -200%;
	}
	70% {
		left: -200%;
	}
	75% {
		left: -300%;
	}
	95% {
		left: -300%;
	}
	100% {
		left: -400%;
	}
}

</style>
</head>
<body>
<!--Header--> 
<?php include('includes/header.php');?>
<!-- /Header -->
<div id="slider">
		<figure>
			<img src="assets/images/slider/img1_blank.jpg">
			<img src="assets/images/slider/img2_blank.jpg">
			<img src="assets/images/slider/img3_blank.jpg">
			<img src="assets/images/slider/img4_blank.jpg">
			<img src="images/slider/img5_blank.jpeg">
		</figure>
	</div>
<!-- //banner -->

	
<!-- Modal2 -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
	<div class="modal-dialog">
	<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			
			</div>
		</div>
	</div>
</div>
<div class="clearfix"> </div> 
<!-- //Modal2 -->	
<!-- about -->
<div class="about-top" id="about">
	<div class="container">
		<h3 class="w3l-title">À propos de nous</h3>
		<div class="w3layouts_header">
			<p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
		</div>
		<div class="col-md-7 wthree-services-bottom-grids">
			<div class="wthree-services-left">
				<img src="images/ab1.jpg" alt="">
			</div>
			<div class="wthree-services-right">
				<img src="assets/images/recent-blog-3.jpg" alt="">
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="col-md-5 wthree-about-grids">
			<h4>BIENVENUE À L'AGENCE HADDAD</h4>
			<a href="page.php?type=faqs" class="trend-w3l" data-toggle="modal" data-target="#myModal"><span>Lire la suite</span></a>
			<a href="contact-us.php" class="trend-w3l scroll"><span>Entrer en contact</span></a>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- modal -->
<div class="modal about-modal w3-agileits fade" id="myModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
			</div> 
			<div class="modal-body">
				<img src="images/g10.jpg" alt=""> 
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum iaculis enim, non convallis felis mattis at. Donec fringilla lacus eu pretium rutrum. Cras aliquet congue ullamcorper. Etiam mattis eros eu ullamcorper volutpat. Proin ut dui a urna efficitur varius. uisque molestie cursus mi et congue consectetur adipiscing elit cras rutrum iaculis enim, Lorem ipsum dolor sit amet, non convallis felis mattis at. Maecenas sodales tortor ac ligula ultrices dictum et quis urna. Etiam pulvinar metus neque, eget porttitor massa vulputate. </p>
			</div> 
		</div>
	</div>
</div>

<!-- services -->
<div class="services" id="services" >
	<div class="container">  
		<h3 class="w3l-title">Nos services</h3>
		<div class="w3layouts_header">
			<p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>
		</div>
		<div class="services-w3ls-row">
			<div class="col-xs-4 services-grid agileits-w3layouts">
				<h6>01</h6>
				<h5>AUCUN APPORT</h5>
				<ul>
				<li>Pas de frais d'achat</li>
				<li>Pas de frais de financement</li>
				<li>Pas de décote du véhicule</li>
				</ul>
			</div>
			<div class="col-xs-4 services-grid agileits-w3layouts">
				<h6>02</h6>
				<h5>FLEXIBILITÉ TOTALE</h5>
				<ul>
				<li>Disponibilité du véhicule en moins d'une semaine</li>
				<li>Conservez un véhicule autant de temps que vous le souhaitez</li>
				<li>Offre sans engagement</li>
				</ul>
			</div>
			<div class="col-xs-4 services-grid agileits-w3layouts">
				<h6>03</h6>
				<h5>CONFIGURABLE</h5>
				<ul>
				<li>Large variété de protections pour votre sécurité</li>
				<li>Forfaits kilométriques flexibles et adaptés à vos besoins</li>
				</ul>
			</div> 
			<div class="clearfix"> </div>
		</div>  
	</div>
</div>

	


	
		
<!-- footer -->
<?php include('includes/footer.php');?>
<!-- //footer -->
<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
<!--/Forgot-password-Form --> 
<!-- js-scripts -->			
<!-- js-files -->
    <script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script src="assets/js/SmoothScroll.min.js"></script>
    <script type="text/javascript" src="assets/js/numscroller-1.0.js"></script>
    <script type="text/javascript" src="assets/js/move-top.js"></script>
    <script type="text/javascript" src="assets/js/easing.js"></script>
    <script src="assets/js/jquery.swipebox.min.js"></script>
    <script src="assets/js/simplePlayer.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.cycle2.min.js"></script>
    <script src="assets/js/jquery.cycle2.carousel.min.js"></script>
    <script src="assets/js/jquery.nivo.slider.pack.js"></script>
    <script src="assets/js/jquery.singlePageNav.js"></script>
    <script src="assets/js/stickUp.min.js"></script>
    <script src="assets/js/interface.js"></script>
    <script src="assets/js/bootstrap-slider.min.js"></script> 
    <script src="assets/js/slick.min.js"></script> 
    <script src="assets/js/owl.carousel.min.js"></script>
<!-- //Calendar -->	

<!-- //js-scripts -->
</body>
</html>