<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['send']))
  {
$name=$_POST['fullname'];
$email=$_POST['email'];
$contactno=$_POST['contactno'];
$message=$_POST['message'];
$sql="INSERT INTO  tblcontactusquery(name,EmailId,ContactNumber,Message) VALUES(:name,:email,:contactno,:message)";
$query = $dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':contactno',$contactno,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Requête envoyée. nous vous contacterons";
}
else 
{
$error="Un problème est survenu. Veuillez réessayer";
}

}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>

<title>Location de voiture | Contactez-nous Page</title>
<!--Bootstrap -->
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
 <style>
    .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
    </style>
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
<!-- /Header --> 

<!--Page Header-->
<section class="page-header contactus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Nous contacter</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="index.php">Accueil</a></li>
        <li>Nous contacter</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<!--Contact-us-->
<section class="contact_us section-padding">
  <div class="container">
    <div  class="row">
      <div class="col-md-6">
        <h3>Contactez-nous en utilisant le formulaire ci-dessous</h3>
          <?php if($error){?><div class="errorWrap"><strong>ERREUR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap"><strong>SUCCÈS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
        <div class="contact_form gray-bg">
          <form  method="post">
            <div class="form-group">
              <label class="control-label">Nom complet <span>*</span></label>
              <input type="text" name="fullname" class="form-control white_bg" id="fullname" required>
            </div>
            <div class="form-group">
              <label class="control-label">Adresse e-mail <span>*</span></label>
              <input type="email" name="email" class="form-control white_bg" id="emailaddress" required>
            </div>
            <div class="form-group">
              <label class="control-label">Numéro de téléphone <span>*</span></label>
              <input type="text" name="contactno" class="form-control white_bg" id="phonenumber" required maxlength="10" pattern="[0-9]+">
            </div>
            <div class="form-group">
              <label class="control-label">Message <span>*</span></label>
              <textarea class="form-control white_bg" name="message" rows="4" required></textarea>
            </div>
            <div class="form-group">
              <button class="btn" type="submit" name="send" type="submit">Envoyer le message <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-6">
        <h3>Informations de contact</h3>
        <div class="contact_detail">
              <?php 
$pagetype=$_GET['type'];
$sql = "SELECT Address,EmailId,ContactNo from tblcontactusinfo";
$query = $dbh -> prepare($sql);
$query->bindParam(':pagetype',$pagetype,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>
          <ul>
            <li>
              <div class="icon_wrap"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
              <div class="contact_info_m"><?php   echo htmlentities($result->Address); ?></div>
            </li>
            <li>
              <div class="icon_wrap"><i class="fa fa-phone" aria-hidden="true"></i></div>
              <div class="contact_info_m"><a href="tel:0663-85-63-26"><?php   echo htmlentities($result->ContactNo); ?></a></div>
            </li>
            <li>
              <div class="icon_wrap"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
              <div class="contact_info_m"><a href="Bohbohaa8820@gmail.com"><?php   echo htmlentities($result->EmailId); ?></a></div>
            </li>
          </ul>
        <?php }} ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Contact-us--> 

 

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
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 

<!--bootstrap-slider-JS--> 
<script src="assets/js/bootstrap-slider.min.js"></script> 
<!--Slider-JS--> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>

</html>