<footer>
  <div class="footer">
  <div class="container">
    <div class="wthree_footer_grid_left">
      <div class="col-md-3 col-xs-3 wthree_footer_grid_left1">
        <h4>About Us</h4>
        <p><?php echo "Write About ur Business"; ?></p>
      </div>
      <div class="col-md-3 col-xs-3 wthree_footer_grid_left1">
        <h4>Navigation</h4>
        <ul>
          <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="index.php">Accueil</a></li>
          <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="page.php?type=aboutus" class="scroll">À propos de nous</a></li>
          <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="page.php?type=faqs" class="scroll">FAQs</a></li>
          <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="car-listing.php" class="scroll">Liste De Voiture</a></li>
          <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="contact-us.php" class="scroll">Contact</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-xs-3 wthree_footer_grid_left1 wthree_footer_grid_right1">
        <h4>Contact Us</h4>
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
          <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:info@example.com"><?php echo htmlentities($result->EmailId); ?></a></li>
          <li><i class="fa fa-phone" aria-hidden="true"></i><?php echo htmlentities($result->ContactNo); ?></li>
          <li><i class="fa fa-fax" aria-hidden="true"></i><?php echo htmlentities($result->Address); ?></li>
        </ul>
        <?php }} ?>
      </div>
      <div class="clearfix"> </div>
    </div>
  </div>
</div>
<div class="w3layouts_copy_right">
  <div class="container">
    <p> Copyright © 2020 Portail de location de voitures. Tous les droits sont réservés </p>
  </div>
</div>
</footer>