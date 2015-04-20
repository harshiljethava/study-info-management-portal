<!DOCTYPE html>
<html lang="en">
<head>
<title>GECG Learn Center</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/JSPfile.js"></script>
<script type="text/javascript" src="js/jquery-1.5.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Molengo_400.font.js"></script>
<script type="text/javascript" src="js/Expletus_Sans_400.font.js"></script>
<script type="text/javascript" src="js/JSPfile.js"></script>
<script type="text/javascript"  >
function vad()
{
	var tep=document.myform.email.value;
	 if (tep==null || tep=="")
	{  
      alert("Email can not be blank	 ");  
	  //document.myform.name.focus();
      return false;  
    }
	
}



 </script>
<!--[if lt IE 9]>
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

<body id="page5">
	<div class="body1">
		<div class="main">
<!-- header -->
			<header>
				<div class="wrapper">
					<nav>
						<ul id="menu">
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About Us</a></li>
							<li><a href="dash.php">Dash board</a></li>
							<li><a href="feedback.php">Feedback</a></li>
							<li><a href="login.php">Log In</a></li>
							<li><a href="register.php">Register</a></li>
							<li class="end"><a   href="contact.php">Contact Us</a></li>
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
							<div class="pad_left1">
								<h2>Forgot Password</h2>
								<form id="ContactForm" name="myform"   onSubmit="return vad()"  method="post" action="f1.php">
									<div>
									<div  class="wrapper">
											<strong>Select:</strong>
											<div ><input type="radio" name="rb" value="Teacher">Teacher <input type="radio" name="rb" value="Student">Student
											</div>
										</div>
									
										<div  class="wrapper">
										
											<strong>Email Id</strong>
											<div class="bg"><input type="text" class="input" name="email" >
											</div>
										</div>
										
									<input type="submit" class="button" style="line-height:40px; height:40px; border-radius:6px; display:block; -moz-border-radius:6px; width:100px " value="Submit" action="f1.php"/>
									
										
										
									</div>
								</form>
							</div>
						</article>
						
					</div>
				</div>
			</section>
<!-- content -->

			
		</div>
	</div>
<script type="text/javascript"> Cufon.now(); </script>
	</div>
		<em>Total Visiter till : </em>
	<!-- hitwebcounter Code START -->
<a href="http://www.hitwebcounter.com/" target="_blank">
<img src="http://hitwebcounter.com/counter/counter.php?page=6005653&style=0006&nbdigits=5&type=ip&initCount=0" title="" Alt=""   border="0" >
</a><br/>
<!-- hitwebcounter.com --><a href="http://www.hitwebcounter.com/countersiteservices.php" title="Nice Amazing Counters" 
target="_blank" style="font-family: Geneva, Arial, Helvetica, sans-serif; 
font-size: 10px; color: #908C86; text-decoration: underline ;"><em></em>
</a>  
	</div>
</body>
</html>