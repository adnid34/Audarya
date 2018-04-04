<!DOCTYPE html>
<html lang="en">
<head>
<title>test_admin</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css/toggle.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.6.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script> 
<script type="text/javascript" src="js/Vegur_700.font.js"></script>
<script type="text/javascript" src="js/Vegur_400.font.js"></script>
<script type="text/javascript" src="js/Vegur_300.font.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>
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
<script>
    function accepted()
     {
           var div = document.getElementById("newpost");
		   var bttn = document.getElementById("accept");
       var div1 = document.getElementById("newpost1");
    if (div.style.display !== "none") {
        div.style.display = "none";
    }
    else {
        div.style.display = "block";
    }
       
       if (div1.style.display !== "none") {
        div1.style.display = "none";
    }
    else {
        div1.style.display = "block";
    }
	
	bttn.style.display = "none";
	del.style.display = "none";
       
     }
	 
	 function deletion()
     {
           var div = document.getElementById("notifi");
		   var del = document.getElementById("delete");
		   var bttn = document.getElementById("accept");
    if (div.style.display !== "none") {
        div.style.display = "none";
    }
    else {
        div.style.display = "block";
    }
	del.style.display = "none";
	bttn.style.display = "none";
       
     }
  </script>
<body>
	<div class="body1">
		<div class="main">
<!-- header -->
			<header>
				<div class="wrapper">
					<h1><a id="logo">Hope Center</a></h1>
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
					<ul class="nav">
						<li class="selected"><a href="#log1">Gallery</a></li>
						<li><a href="#log2">Notifications</a></li>
						<li><a href="#log3">Achievements</a></li>
						<li><a href="#log4">News</a></li>
						<li><a href="#log5">Registrations</a></li>
					</ul>
				</div>
				<div class="wrapper">
					<div class="box2">
						<div class="wrapper tab-content" id="log1">
							<div id="page1">
								<section class="col1">
									<h4><span>June 31</span>2011</h4>
									<figure><img src="images/page1_img3.jpg" alt=""></figure>
									<a href="#" class="button2">Read More</a>
								</section>
								
								<section class="col1">
									<h4 class="color3"><span>June 17</span>2011</h4>
									<figure><img src="images/page1_img3.jpg" alt=""></figure>
									<a href="#" class="button2 color3">Read More</a>
								</section>
								
								<section class="col1">
									<h4 class="color3"><span>June 17</span>2011</h4>
									<figure><img src="images/page1_img3.jpg" alt=""></figure>
									<a href="#" class="button2 color3">Read More</a>
								</section>
								
								<section class="col1">
									<h4 class="color3"><span>June 17</span>2011</h4>
									<figure><img src="images/page1_img3.jpg" alt=""></figure>
									<a href="#" class="button2 color3">Read More</a>
								</section>
								
								<section class="col1">
									<h4 class="color3"><span>June 17</span>2011</h4>
									<figure><img src="images/page1_img3.jpg" alt=""></figure>
									<a href="#" class="button2 color3">Read More</a>
								</section>
							</div>
						</div>
						<div class="wrapper tab-content" id="log2">
							<div id="page3">
								<section class="col1">
									<div id="notifi">
										<h4><span>NGO Name1</span></h4>
										<p class="pad_bot2">
											<strong>Event name </strong>Bla Bla Bla<br>
											<div id="newpost">
												<strong>Date: </strong>21/21/2121<br>
												<strong>Place: </strong>gandhinagar
												</p>
												<p class="pad_bot1">Details: Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.
												</p>
											</div>
											<div id="newpost1" style="display: none">
												<p class="clor3"><strong>Accepted</strong></p>
											 </div>
										<button class="button2 color3" id="accept" onclick="accepted()">Accept</button>
										<button class="button2" id="delete" onclick="deletion()">Delete</button>
									</div>
								</section>
								<section class="col1">
									<div id="notifiy">
										<h4><span>NGO Name2</span></h4>
										<p class="pad_bot2">
											<strong>Event name </strong>Bla Bla Bla<br>
											<div id="newpost">
												<strong>Date: </strong>21/21/2121<br>
												<strong>Place: </strong>gandhinagar
												</p>
												<p class="pad_bot1">Details: Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.
												</p>
											</div>
											<div id="newpost1" style="display: none">
												<p class="clor3"><strong>Accepted</strong></p>
											 </div>
										<button class="button2 color3" id="accept" onclick="accepted()">Accept</button>
										<button class="button2" id="delete" onclick="deletion()">Delete</button>
									</div>
								</section>
							</div>
						</div>
						<div class="wrapper tab-content" id="log3">
							<form id="ContactForm">
								<div>
									<div class="wrapper"><span>Name:</span><input type="text" class="input" id="name" name="name" placeholder="Enter your user name" required></div>
									<div class="wrapper"><span>E-mail:</span><input type="email" class="input" id="email" name="email" placeholder="Enter your email" required></div>
									<div class="wrapper"><span>State:</span><input type="text" class="input" id="state" name="state" placeholder="Enter your state" required></div>
									<div class="wrapper"><span>City</span><input type="text" class="input" id="city" name="city" placeholder="Enter your city" required></div>
									<div class="wrapper"><span>City</span><input type="text" class="input" id="city" name="city" placeholder="Enter your city" required></div>
									<button type="submit" id="submit" class="button2 color3">Submit</button>
								</div>
							</form>
						</div>
						<div class="wrapper tab-content" id="log4">
							<form id="ContactForm">
								<div>
									<div class="wrapper"><span>Name:</span><input type="text" class="input" id="name" name="name" placeholder="Enter your user name" required></div>
									<div class="wrapper"><span>E-mail:</span><input type="email" class="input" id="email" name="email" placeholder="Enter your email" required></div>
									<div class="wrapper"><span>State:</span><input type="text" class="input" id="state" name="state" placeholder="Enter your state" required></div>
									<div class="wrapper"><span>City</span><input type="text" class="input" id="city" name="city" placeholder="Enter your city" required></div>
									<div class="wrapper"><span>City</span><input type="text" class="input" id="city" name="city" placeholder="Enter your city" required></div>
									<button type="submit" id="submit" class="button2 color3">Submit</button>
								</div>
							</form>
						</div>
						<div class="wrapper tab-content" id="log5">
							<div id="page3">
								<section class="col1">
									<div id="notifi">
										<h4><span>NGO Name</span></h4>
										<p class="pad_bot2">
											<strong>Event name </strong>Bla Bla Bla<br>
											<div id="newpost">
												<strong>Date: </strong>21/21/2121<br>
												<strong>Place: </strong>gandhinagar
												</p>
												<p class="pad_bot1">Details: Natus error sit voluptatem accusantium doloremque laudantium architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.
												</p>
											</div>
											<div id="newpost1" style="display: none">
												<p class="clor3"><strong>Accepted</strong></p>
											 </div>
										<button class="button2 color3" id="accept" onclick="showhide()">Accept</button>
									</div>
								</section>
							</div>
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