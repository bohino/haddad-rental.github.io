<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
?><!DOCTYPE HTML>
<html lang="en">
<head>

<title>Portail de location de voitures - Ma réservation</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="assets/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">


<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x14" href="assets/images/favicon-icon/log.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="50x50" href="assets/images/favicon-icon/log.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="200x200" href="assets/images/favicon-icon/log.jpg">
    <link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/log.jpg">
    <link rel="shortcut icon" href="assets/images/favicon-icon/log.jpg">
<!-- Google-Font-->
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->  
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
<!--Page Header-->
<!-- /Header --> 

<!--Page Header-->
<section class="page-header profile_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Ma réservation</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="index.php">Accueil</a></li>
        <li>Ma réservation</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 

<?php 
$useremail=$_SESSION['login'];
$sql = "SELECT * from tblusers where EmailId=:useremail";
$query = $dbh -> prepare($sql);
$query -> bindParam(':useremail',$useremail, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>
<section class="user_profile inner_pages">
  <div class="container">
    <div class="user_profile_info gray-bg padding_4x4_40">
      <div class="upload_user_logo"> <img src="assets/images/Haddad.jpg" alt="image">
      </div>

      <div class="dealer_info">
        <h5><?php echo htmlentities($result->FullName);?></h5>
        <p><?php echo htmlentities($result->Address);?><br>
          <?php echo htmlentities($result->City);?>&nbsp;<?php echo htmlentities($result->Country); }}?></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-3">
       <?php include('includes/sidebar.php');?>
   
      <div class="col-md-8 col-sm-8">
        <div class="profile_wrap">
          <h5 class="uppercase underline">Ma réservation </h5>
          <div class="my_vehicles_list">
            <ul class="vehicle_listing">
<?php 
$useremail=$_SESSION['login'];
 $sql = "SELECT tblvehicles.Vimage1 as Vimage1,tblvehicles.VehiclesTitle,tblvehicles.id as vid,tblbrands.BrandName,tblbooking.FromDate,tblbooking.ToDate,tblbooking.message,tblbooking.Status,tblvehicles.PricePerDay,DATEDIFF(tblbooking.ToDate,tblbooking.FromDate) as totaldays,tblbooking.BookingNumber  from tblbooking join tblvehicles on tblbooking.VehicleId=tblvehicles.id join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand where tblbooking.userEmail=:useremail";
$query = $dbh -> prepare($sql);
$query-> bindParam(':useremail', $useremail, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  ?>

<li>
    <h4 style="color:red"><?php echo htmlentities($result->BookingNumber);?></h4>
                <div class="vehicle_img"> <a href="vehical-details.php?vhid=<?php echo htmlentities($result->vid);?>"><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1);?>" alt="image"></a> </div>
                <div class="vehicle_title">

                  <h6><a href="vehical-details.php?vhid=<?php echo htmlentities($result->vid);?>"> <?php echo htmlentities($result->BrandName);?> , <?php echo htmlentities($result->VehiclesTitle);?></a></h6>
                  <p><b>From </b> <?php echo htmlentities($result->FromDate);?> <b>To </b> <?php echo htmlentities($result->ToDate);?></p>
                  <div style="float: left"><p><b>Message:</b> <?php echo htmlentities($result->message);?> </p></div>
                </div>
                <?php if($result->Status==1)
                { ?>
                <div class="vehicle_status"> <a href="#" class="btn outline btn-xs active-btn">Confirmed</a>
                           <div class="clearfix"></div>
        </div>

              <?php } else if($result->Status==2) { ?>
 <div class="vehicle_status"> <a href="#" class="btn outline btn-xs">Cancelled</a>
            <div class="clearfix"></div>
        </div>
             


                <?php } else { ?>
 <div class="vehicle_status"> <a href="#" class="btn outline btn-xs">Not Confirm yet</a>
            <div class="clearfix"></div>
        </div>
                <?php } ?>
       
              </li>

<h5 style="color:blue">Facture d'achat</h5>
<table>
  <tr>
    <th>Car Name</th>
    <th>From Date</th>
    <th>To Date</th>
    <th>Total Days</th>
    <th>Rent / Day</th>
  </tr>
  <tr>
    <td><?php echo htmlentities($result->VehiclesTitle);?>, <?php echo htmlentities($result->BrandName);?></td>
     <td><?php echo htmlentities($result->FromDate);?></td>
      <td> <?php echo htmlentities($result->ToDate);?></td>
       <td><?php echo htmlentities($tds=$result->totaldays);?></td>
        <td> <?php echo htmlentities($ppd=$result->PricePerDay);?></td>
  </tr>
  <tr>
    <th colspan="4" style="text-align:center;"> Grand Total</th>
    <th><?php echo htmlentities($tds*$ppd);?></th>
  </tr>
</table>
<hr />
              <?php }}  else { ?>
                <h5 align="center" style="color:red">No booking yet</h5>
              <?php } ?>
             
         
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/my-vehicles--> 
<?php include('includes/footer.php');?>

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
<?php } ?>