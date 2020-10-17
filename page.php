<?php
session_start();
include('includes/config.php');
error_reporting(0);
?>

<!DOCTYPE html>
<html>
  <head>
    <title>La gestion de location de voitures en ligne</title>
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
    <link rel="apple-touch-icon-precomposed" sizes="144x14" href="assets/images/favicon-icon/log.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="50x50" href="assets/images/favicon-icon/log.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="200x200" href="assets/images/favicon-icon/log.jpg">
    <link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/log.jpg">
    <link rel="shortcut icon" href="assets/images/favicon-icon/log.jpg">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,600' rel='stylesheet' type='text/css'>
	 


    <script type="text/javascript">
re
ddsmoothmenu.init({
	mainmenuid: "templatemo_flicker", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

  </head>
  <body>
        
<!--Header-->
<div class="main_section_agile" id="home">
  <div class="agileits_w3layouts_banner_nav">
    <nav class="navbar navbar-default">
      <div class="navbar-header navbar-left">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <a class="navbar-brand" href="index.php"><img src="assets/images/logoh.jpg" alt="logo"></a>
<div class="col-sm-9 col-md-10">
          <div class="header_info">
                     <?php
         $sql = "SELECT EmailId,ContactNo from tblcontactusinfo";
$query = $dbh -> prepare($sql);
$query->bindParam(':vhid',$vhid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
foreach ($results as $result) {
$email=$result->EmailId;
$contactno=$result->ContactNo;
}
?>
            

          </div>
        </div>
      </div>


      <div class="w3layouts_header_right">

          <form action="search.php" method="post">

          <input name="searchdata" type="search" placeholder="Search" required="true">
          <input type="submit" value="">
        </form>

      </div>
      
      
      <Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
        <nav class="link-effect-2" id="link-effect-2">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php" class="effect-3">Accueil</a></li>
            <li><a href="page.php?type=aboutus" class="effect-3 scroll">À propos de nous</a></li>
            <li><a href="page.php?type=faqs" class="effect-3 scroll">FAQs</a></li>
            <li><a href="car-listing.php" class="effect-3 scroll">Liste De Voitures</a></li>
            <li><a href="contact-us.php" class="effect-3 scroll">Contact</a></li>
                        <?php   if(strlen($_SESSION['login'])==0)
  { 
?>
    <li><a  href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Connextion</a></li>

<?php }
else{ 


 } ?>
            <div class="header_wrap">
      <div class="user_login"> 
          
            
<?php 
$email=$_SESSION['login'];
$sql ="SELECT FullName FROM tblusers WHERE EmailId=:email ";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
  {

   echo htmlentities($result->FullName); }}?>
   
              <?php if($_SESSION['login']){?>
                
               <ul><li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i><i class="fa fa-angle-down" aria-hidden="true"></i></a> 
               <ul class="dropdown-menu"> 
           <li><a href="profile.php">Paramètres de profil</a></li>
              <li><a href="update-password.php">Mettre à jour le mot de passe</a></li>
            <li><a href="my-booking.php">Ma réservation</a></li>
            <li><a href="post-testimonial.php">Publier un témoignage</a></li>
          <li><a href="my-testimonials.php">Mon témoignage</a></li>
            <li><a href="logout.php">Déconnexion</a></li>
            
            <?php } ?>
          </ul>
            </li>
          </ul>
        </div>
          </ul>
        </nav>

      </div>
    </nav>  
    <div class="clearfix"> </div> 
  </div>
</div>
<!--/header-->
<?php 
$pagetype=$_GET['type'];
$sql = "SELECT type,detail,PageName from tblpages where type=:pagetype";
$query = $dbh -> prepare($sql);
$query->bindParam(':pagetype',$pagetype,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>
<section class="page-header aboutus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>FAQ</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="index.php">Accueil</a></li>
        <li>FAQ</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<section class="about_us section-padding">
  <div class="container">
    <div class="section-header text-center">


      <h2><?php   echo htmlentities($result->PageName); ?></h2>
      <p><?php  echo $result->detail; ?> </p>
    </div>
   <?php } }?>
  </div>
</section>
<!-- /About-us--> 

<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer--> 

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form --> 

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form --> 

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
<!--/Forgot-password-Form --> 

<!-- Scripts --> 
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/slimbox2.js"></script> 
    <script src="assets/js/jquery.min.js"></script>
	  <script src="assets/js/ddsmoothmenu.js"></script>
</body>
</html>