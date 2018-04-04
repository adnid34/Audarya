<?php
require "connect.php";
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
<body id="page5">
<div class="body1">
	<div class="main">
<!-- header -->
		<header>
			<div class="wrapper">
				<h1><a href="index.html" id="logo">Hope Center</a></h1>
				<nav>
					<ul id="top_nav">
						<li><a href="index.html"><img src="images/top_icon1.gif" alt=""></a></li>
						<li><a href="#"><img src="images/top_icon2.gif" alt=""></a></li>
						<li class="end"><a href="Contact.html"><img src="images/top_icon3.gif" alt=""></a></li>
					</ul>
				</nav>
				<nav>
					<ul id="menu">
						<li><a href="index.html">Home</a></li>
						 <li><a href="about.html">About</a></li>
						 <li><a href="Contact.html">Contact</a></li>
                          <li><a href="login.html">Login</a></li>
						 
						 
						
						<li id="menu_active"><a href="Contact.html">Register</a></li>
					</ul>
				</nav>
			</div>
		</header><div class="ic">More Website Templates  &copy; TemplateMonster.com - July 18th 2011!</div>
<!-- / header -->
<!-- content -->
		<article id="content">
			 
			<div class="wrapper">
				<div class="pad_left2 relative">
					<h4 class="color3"><span>Register</span>Form</h4>
					<img src="images/page6_img1.png" alt="" class="img1">
					<form id="ContactForm" method="post">
						<div>
							<div class="wrapper"><span>DonorName:</span><input type="text" name="DonorName" class="input"></div>
							<div class="wrapper"><span>Username:</span><input type="text" name="Username" class="input"></div>
							<div class="wrapper"><span>Password:</span><input type="password" name="Password" class="input"></div>
							<div class="wrapper"><span>E-mail:</span><input type="text" name="Email" class="input"></div>
							<div class="textarea_box"><span>Address:</span><textarea name="Address" cols="20" maxlen="200" rows="4"></textarea></div>
							<div class="wrapper"><span>City:</span><input type="text" name="City" class="input"></div>
							<div class="wrapper"><span>DocumentID:</span><input type="text" name="DocumentID" class="input"></div>
							<div class="wrapper"><span>DocumentName:</span><input type="text" name="DocumentName" class="input"></div>
							<div class="wrapper"><span>DocumentImage:</span><input type="file" name="DocumentImage" class="input"></div>
							 
							<button type="submit" class="button2 color3" name="submit">Send</button>
							<a href="#" class="button2 color3" onClick="document.getElementById('ContactForm').reset()">Clear</a>
						</div>
					</form>
				</div>
			</div>
		</article>
<!-- / content -->
<!-- footer -->
		<footer>
			 
		</footer>
<!-- / footer -->
	</div>
</div>
<script type="text/javascript">Cufon.now();</script>
<?php
if (isset($_REQUEST['submit']))
{
$DonorName= $_REQUEST['DonorName'];
$Username= $_REQUEST['Username'];
$Password= $_REQUEST['Password'];
$Email= $_REQUEST['Email'];
$Address= $_REQUEST['Address'];
$City= $_REQUEST['City'];
$DocumentID= $_REQUEST['DocumentID'];
$DocumentName= $_REQUEST['DocumentName'];
$DocumentImage= $_REQUEST['DocumentImage'];
$query ="INSERT INTO donor( DonorName, Address, DocumentID, DocumentName, DocumentImage, City, Username, Password, Email) VALUES ('$DonorName','$Address','$DocumentID','$DocumentName','$DocumentImage','$City','$Username','$Password','$Email')";
$rs = mysqli_query($con,$query);
echo '<script>alert("successfully registered")</script>';
}
?>
</body>
</html>