<?php
require "connect.php";
$query="select * from Donor where UserID=2";
$rs = mysqli_query($con,$query);
$fetch = mysqli_fetch_array($rs);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>test_donor</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/toggle.css" type="text/css" media="all">
<link rel="stylesheet" href="css/checkbox.css" type="text/css" media="all">

<link rel="stylesheet" href="checkbox-svg-path-animation/css/style.css">

<script type="text/javascript" src="js/jquery-1.6.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script> 
<script type="text/javascript" src="js/Vegur_700.font.js"></script>
<script type="text/javascript" src="js/Vegur_400.font.js"></script>
<script type="text/javascript" src="js/Vegur_300.font.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>

<style>
.ck{
display: inline-block;
}
</style>
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
<body id="page3">
	<div class="body1">
		<div class="main">
<!-- header -->
			<header>
				<div class="wrapper">
					<h1><a id="logo"></a></h1>
					<nav>
						<ul id="top_nav">
							<li><img src="images/top_icon1.gif" alt=""></li>
							<li><a href="#"><img src="images/top_icon2.gif" alt=""></a></li>
							<li class="end"><img src="images/top_icon3.gif" alt=""></li>
						</ul>
					</nav>
					<nav>
						<ul id="menu">
							<li><a href="index.html">Sign out</a></li>
						</ul>
					</nav>
				</div>
			</header><div class="ic">More Website Templates  &copy; TemplateMonster.com - July 18th 2011!</div>
<!-- / header -->
<!-- content -->
			<article id="content" class="tabs">
				<div class="wrapper">	
					<div class="box1">
						<div class="wrapper">
							<section class="col1">
								<h2><strong>H</strong>ello<span> Sameer</span></h2>
								<div class="line1">
									<figure class="left marg_right1"><img src="images/page3_img1.jpg" alt=""></figure>
									<strong class="address">
									Country:<br>
									City:<br>
									Zip Code:<br>
									Telephone:<br>
									Fax:<br>
									E-Mail:
								</strong>
								USA<br>
								San Diego<br>
								50122<br>
								+354 5635600<br>
								+354 5635610<br>
								<a href="mailto:">hopecenter@gmail.com</a>
								</div>
							</section>
						</div>
					</div>	
				</div>
				<div class="wrapper">
					<ul class="nav">
						<li class="selected"><a href="#log1">Donations</a></li>
						<li><a href="#log2">Donate</a></li>
						<li><a href="#log3">Edit Profile</a></li>
						<li><a href="#log4">Check Reply</a></li>
					</ul>
				</div>
				<div class="wrapper">
					<div class="box2">
						<div class="wrapper tab-content" id="log1">
							<section class="col1">
								<h4><span>June 31</span>2011</h4>
								<p class="pad_bot2"><strong>Sed ut perspiciatis unde omnis occaecati cupiditate non provident</strong></p>
								<p class="pad_bot1">Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
								<h4 class="color2"><span>June 29</span>2011</h4>
								<p class="pad_bot2"><strong>Et harum quidem rerum facilis est et expedita distinctio</strong></p>
								<p class="pad_bot1">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
								<h4 class="color3"><span>June 17</span>2011</h4>
								<p class="pad_bot2"><strong>Sed ut perspiciatis unde omnis occaecati cupiditate non provident</strong></p>
								Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.
							</section>
						</div>
						<div class="wrapper tab-content" id="log2">
							<section class="col1">
								<div class="">
									<h4>Select The Goods</h4>
					
									<div class="ck color3"><input type="checkbox">Clothes</div>
									<div class="ck color3"><input type="checkbox">Food</div>
									<div class="ck color3"><input type="checkbox">Books</div>
								</div>
								
								<div class="">
									<h4>Select The Age Group</h4>
					
									<div class="ck color3"><input type="checkbox">5-10</div>
									<div class="ck color3"><input type="checkbox">10-20</div>
									<div class="ck color3"><input type="checkbox">20-30</div>
								</div>

								<div class="row">
									<div class="panel-group" id="accordion">
										<div class="panel panel-default" id="panel1">
											<div class="panel-heading">
												 <h4 class="panel-title">
											<a data-toggle="collapse" data-target="#collapseOne" 
											   href="#collapseOne">
											  Collapsible Group Item #1
											</a>
										  </h4>

											</div>
											<div id="collapseOne" class="panel-collapse collapse">
												<div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
											</div>
										</div>
										<div class="panel panel-default" id="panel2">
											<div class="panel-heading">
												 <h4 class="panel-title">
											<a data-toggle="collapse" data-target="#collapseTwo" 
											   href="#collapseTwo" class="collapsed">
											  Collapsible Group Item #2
											</a>
										  </h4>

											</div>
											<div id="collapseTwo" class="panel-collapse collapse">
												<div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
											</div>
										</div>
										<div class="panel panel-default" id="panel3">
											<div class="panel-heading">
												 <h4 class="panel-title">
											<a data-toggle="collapse" data-target="#collapseThree"
											   href="#collapseThree" class="collapsed">
											  Collapsible Group Item #3
											</a>
										  </h4>

											</div>
											<div id="collapseThree" class="panel-collapse collapse">
												<div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
						<div class="wrapper tab-content" id="log3">
							<form id="ContactForm">
								<div><input type="hidden" name="id" value="<?php echo $fetch['UserID']; ?>">
									<div class="wrapper"><span>DonorName:</span><input type="text" class="input" value="<?php echo $fetch['DonorName']; ?>" name="DonorName"  required></div>
									<div class="wrapper"><span>Email:</span><input type="email" class="input" value="<?php echo $fetch['Email']; ?>" name="email"  required></div>
									<div class="wrapper"><span>Username:</span><input type="text" class="input" value="<?php echo $fetch['Username']; ?>" name="Username"  required></div>
									<div class="wrapper"><span>Password:</span><input type="password" name="Password" value="<?php echo $fetch['Password']; ?>" class="input"></div>
									<div class="wrapper"><span>City</span><input type="text" class="input" value="<?php echo $fetch['City']; ?>" name="city"  required></div>
									<div class="wrapper"><span>Address</span><input type="text" class="input" value="<?php echo $fetch['Address']; ?>" name="Address"  required></div>
									<div class="wrapper"><span>DocumentID:</span><input type="text" name="DocumentID" value="<?php echo $fetch['DocumentID']; ?>" class="input"></div>
									<div class="wrapper"><span>DocumentName:</span><input type="text" name="DocumentName" value="<?php echo $fetch['DocumentName']; ?>" class="input"></div>
									<div class="wrapper"><span>DocumentImage:</span><input type="file" name="DocumentImage" value="<?php echo $fetch['DocumentImage']; ?>" class="input"></div>
								<!--	<input type="button" id="loadFileXml" value="Upload" class="button2 color2" onclick="document.getElementById('file').click();" />
									<input type="file" style="display:none;" id="file" name="file"/>
									<input type="file" id="myFile">-->
									<button type="submit" id="submit" class="button2 color3" name="">Submit</button>
								</div>
							</form>
						</div>
						<?php
if (isset($_REQUEST['submit']))
{
$id= $_REQUEST['UserID'];
$DonorName= $_REQUEST['DonorName'];
$Username= $_REQUEST['Username'];
$Password= $_REQUEST['Password'];
$Email= $_REQUEST['Email'];
$Address= $_REQUEST['Address'];
$City= $_REQUEST['City'];
$DocumentID= $_REQUEST['DocumentID'];
$DocumentName= $_REQUEST['DocumentName'];
$DocumentImage= $_REQUEST['DocumentImage'];
$query="UPDATE `donor` SET `DonorName`='$DonorName',`Address`='$Address',`DocumentID`='$DocumentID',`DocumentName`='$DocumentName',`DocumentImage`='$DocumentImage',`City`='$City',`Username`='$Username',`Password`='$Password',`Email`='$Email' WHERE UserID=$UserID";
$rs = mysqli_query($con,$query);
echo '<script>alert("successfully registered")</script>';
}
?>
						
						<div class="wrapper tab-content" id="log4">
							<section class="col1">
								<h4><span>NGO name</span></h4>
								<p class="pad_bot2"><strong>message</strong></p>
								<p class="pad_bot1">Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
							</section>
						</div>
					</div>
				</div>
			</article>
<!-- / content -->
<!-- footer -->
			<footer>
				<div class="wrapper">
					<a href="index.html" id="footer_logo"><span>Hope</span>Center</a>
					<ul id="icons">
						<li><a href="#" class="normaltip" title="Facebook"><img src="images/icon1.gif" alt=""></a></li>
						<li><a href="#" class="normaltip" title="Twitter"><img src="images/icon2.gif" alt=""></a></li>
						<li><a href="#" class="normaltip" title="Linkedin"><img src="images/icon3.gif" alt=""></a></li>
					</ul>
				</div>	
				<div class="wrapper">
					<div class="tel"><span>+1 800</span>123 45 67</div>
				</div>
			</footer>
<!-- / footer -->
		</div>
	</div>
<script type="text/javascript">Cufon.now(); tabs.init();</script>
</body>
</html>