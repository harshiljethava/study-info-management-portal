<?php 


session_start();

if(!isset($_SESSION["username"])){
  
	header('Location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>GECG Learn Center</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.5.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Molengo_400.font.js"></script>
<script type="text/javascript" src="js/JSPfile.js"></script>
<script type="text/javascript" src="js/Expletus_Sans_400.font.js"></script><!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<style type="text/css">
	.bg, .box2 {behavior:url(js/PIE.htc)}
</style>
<![endif]-->
<!--[if lt IE 7]>
	<div style=' clear: both; text-align:center; position: relative;'>
		<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode">
		<img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0"  alt="" /></a>
	</div>
<![endif]-->
</head>

<body id="page2">
	<div class="body1">
		<div class="main">
<!-- header -->
			<header>
				<div class="wrapper">
					<nav>
						<ul id="menu">
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About Us</a></li><li><a href="dash.php">Dash board</a></li>
							<li><a href="feedback.php">Feedback</a></li>
							
                            <li><a href="login.php">Log In</a></li>
                            <li><a href="register.html">Register</a></li>
                                
  							<li class="end"><a href="contact.php">Contact Us</a></li>
						</ul>
					</nav>
					
				</div>
				<div class="wrapper">
					<h1><a href="index.php" id="logo">Learn Center</a></h1>
				</div>
				<div id="slogan">
					We Will Open The World<span>of knowledge for you!</span>
				</div>

			</header>
<!-- / header -->
		</div>
	</div>
	<div class="body2">
		<div class="main">
<!-- content -->
			<section id="content">
				<div class="box1">
					<div class="wrapper">
					  <article class="col1">
					    <div class="pad_left1">					      </div>
					  </article>
					  <article class="col2 pad_left2">
					    <ul class="list1 pad_bot1">
						    <li></li>
							</ul>
						  <div class="pad_left1">
							  <h2 class="marg_top1">&nbsp;</h2>
						  </div>
						</article>
					</div>
				<strong>This web site is created by 6th sem IT Students. </strong>	
</div>
			</section>
<!-- content -->

		</div>
	</div>
<script type="text/javascript">
Cufon.now();
</script>
</body>
</html>

