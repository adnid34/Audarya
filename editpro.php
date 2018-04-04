<?php
require "connect.php";
$query="select * from Organisation where OrganisationID=1";
$rs = mysqli_query($con,$query);
$fetch = mysqli_fetch_array($rs);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.6.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script> 
<script type="text/javascript" src="js/Vegur_700.font.js"></script>
<script type="text/javascript" src="js/Vegur_400.font.js"></script>
<script type="text/javascript" src="js/Vegur_300.font.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/prof.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5.js"></script>
	<style type="text/css">
		.box1 figure {behavior:url(js/PIE.htc)}
	</style>
<![endif]-->
<!--[if lt IE 7]>
		<div style='clear:both;text-align:center;position:relative'>
			<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" alt="" /></a>
		</div>
<![endif]-->
</head>
<body>
        
    
	<div class="row">
      <!-- left column -->
      

      
      
      <!-- edit form column -->
       
      
         
       
        
        <form class="form-horizontal" role="form">
        	<div class="col-md-9 personal-info">
		<input type="hidden" name="id" value="<?php echo $fetch['OrganisationID']; ?>">
          <div class="form-group">
            <label class="col-lg-3">OrganisationName:</label><br>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="OrganisationName" value="<?php echo $fetch['OrganisationName']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3">OrganisationType:</label><br>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="OrganisationType"value="<?php echo $fetch['OrganisationType']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3">RegistrationID:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="RegistrationID" value="<?php echo $fetch['RegistrationID']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3">Description:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="Description"value="<?php echo $fetch['Description']; ?>">
            </div>
          </div>
		  <div class="form-group">
            <label class="col-lg-3">WebsiteLink:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="WebsiteLink"value="<?php echo $fetch['WebsiteLink']; ?>">
            </div>
          </div>
		  <div class="form-group">
            <label class="col-lg-3">OrganisationCertificate:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="OrganisationCertificate"value="<?php echo $fetch['OrganisationCertificate']; ?>">
            </div>
          </div>
         
      </div>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Save Changes" name="submit">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>

</div>
<hr>
<?php
if (isset($_REQUEST['submit']))
{

$OrganisationID= $_REQUEST['id'];
$OrganisationName= $_REQUEST['OrganisationName'];
$OrganisationType= $_REQUEST['OrganisationType'];
$OrganisationCertificate= $_REQUEST['OrganisationCertificate'];
$WebsiteLink= $_REQUEST['WebsiteLink'];
$Description= $_REQUEST['Description'];
$RegistrationID= $_REQUEST['RegistrationID'];
$query="UPDATE `organisation` SET `OrganisationName`='$OrganisationName',`OrganisationType`='$OrganisationType',`RegistrationID`='$RegistrationID',`WebsiteLink`='$WebsiteLink',`Description`='$Description',`OrganisationCertificate`='$OrganisationCertificate' WHERE OrganisationID=$OrganisationID";
$rs = mysqli_query($con,$query);
echo '<script>alert("successfully Updated")</script>';
}
?>
</body>
 
</html>