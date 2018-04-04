<?php
require "connect.php";
?>

 <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
     <title>Registration Form</title>
    
 
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
<script type="text/javascript">
        function validate_form() {
            if (document.emp.emp_name.value == "") {
                alert("Please fill in the 'Farmer Name' box.");
                return false;
            }
            if (document.emp.num.value == "") {
                alert("Enter Employee Number");
                return false;
            }
            alert("sucessfully Submitted");
 
 
 
            if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/).test(document.emp.email_id.value)) {
                alert("You have entered an invalid email address!")
                return (false)
            }
        }
 
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode;
            if (charCode != 46 && charCode > 31 &&
                (charCode < 48 || charCode > 57)) {
                alert("Enter Number");
                return false;
            }
            return true;
        }
 
 
        //-->
    </script>
</head>
<body id="page5">
<div class="body1"> 
<!-- / header -->
<!-- content -->
         
                 
     <form  class="owntable" name="emp" action=""  onsubmit="return validate_form();" method="post">
        <table class="tabl" align="center" width=40% width="100%" cellspacing="2" cellpadding="2" border="5">
            <tr>
                <td colspan="2" align="center"><b>Organisation Registration Form.</b></td>
 
            </tr>
            <tr>
                <td align="left" valign="top" width="41%">OrganisationName<span style="color:red">*</span></td>
 
                <td width="57%"><input type="text" value="" name="OrganisationName" size="24"></td>
            </tr>
			 <tr>
                <td align="left" valign="top" width="41%">OrganisationType<span style="color:red">*</span></td>
 
                <td width="57%"><input type="text" value="" name="OrganisationType" size="24"></td>
            </tr>
            <tr>
                <td align="left" valign="top" width="41%">RegistrationID<span style="color:red">*</span></td>
                <td width="57%">
                    <input type="text" value="" name="RegistrationID" size="24"></td>
            </tr>
            <tr>
                <td align="left" valign="top" width="41%">Description</td>
 
                <td width="57%"><textarea rows="4" maxlen="200" name="Description" cols="20"></textarea></td>
            </tr>
			
			<tr>
			<td align="left" valign="top" width="41%">WebsiteLink</td>
            <td width="57%">
                <input type="text" value=""  name="WebsiteLink" size="24"></td>
            </tr>
			<tr>
 
            <td align="left" valign="top" width="41%">OrganisationCertificate</td>
            <td width="57%">
                <input type="text" value="" name="OrganisationCertificate" size="24"></td>
            </tr>
          
            <tr>
                <td colspan="2">
                    <p align="center">
                        <input type="submit" value="  submit" name="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="reset" value="  Reset All   " name="B5"></td>
            </tr>
 
        </table>
    </form>


             
         
<!-- / content -->
<!-- footer -->
        <footer>
             
        </footer>
<!-- / footer -->
    </div>
</div>
<script type="text/javascript">Cufon.now();</script>
<div style="backgroundcolor:white;width:200px;height:200px;z-index:10;">
<?php
if (isset($_REQUEST['submit']))
{
$OrganisationName= $_REQUEST['OrganisationName'];
$OrganisationType= $_REQUEST['OrganisationType'];
$OrganisationCertificate= $_REQUEST['OrganisationCertificate'];
$WebsiteLink= $_REQUEST['WebsiteLink'];
$Description= $_REQUEST['Description'];
$RegistrationID= $_REQUEST['RegistrationID'];
echo $query="INSERT INTO `organisation`(`OrganisationName`, `OrganisationType`, `RegistrationID`, `WebsiteLink`, `Description`, `OrganisationCertificate`) VALUES ('$OrganisationName','$OrganisationType','$RegistrationID','$WebsiteLink','$Description','$OrganisationCertificate')";
$rs = mysqli_query($con,$query);
echo '<script>alert("successfully registered")</script>';
}
?>
</div>
</body>
</html>