<?php 
error_reporting(0);

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

<script type="text/javascript" src="js/JSPfile.js"></script>
<script type="text/javascript" src="js/Molengo_400.font.js"></script>
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
							<li><a href="about.php">About Us</a></li>
                            <li><a href="dash.php">Dash board</a></li>
							<li><a href="feedback.html">Feedback</a></li>
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
        <label id="w1">	Welcome , <?php 
					
	
						echo $_SESSION["username"]; ?>
                     </label>
        
		<a href="log_outcode.php">Log out</a>
<!-- content -->
			<section id="content">
				<div class="box1">
					<div class="wrapper">
					  <article class="col1">
					    <div class="pad_left1">				<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#0099FF">
<tr>
<form id="form1" name="form2" method="post" onsubmit="return validateCAns()" action="add_answer.php">
<td>
<table width="107%" height="250" border="0" cellpadding="3" cellspacing="1" bgcolor="#0099FF">
<tr>
<td colspan="3" bgcolor="#0099FF"><p><strong> Submit Answer</strong></p></td>
</tr>
<tr>
<td width="14%"><strong>Subject : </strong></td>
<td width="2%"></td>
<td width="84%"><input name="topic" type="text" id="topic" size="50" /></td>
</tr>
<tr>
<td valign="top"><strong>Answer : </strong></td>
<td valign="top"></td>
<td><textarea name="a" cols="50" rows="3" id="a"></textarea></td>
</tr>
<tr>
<td height="20">&nbsp;</td>
<td>&nbsp;</td>
<tr>
<td><strong>Question no: </strong></td>
<td></td>
<td><input name="qid" type="text" id="qid" size="20"  /></td>
</tr>

</tr>
<tr>
<td><strong>Name : </strong></td>
<td></td>
<td><input name="name" type="text" id="name" size="50" /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Submit" /> <input type="reset" name="Submit2" value="Reset" /></td>
</tr>
</table>
</td>
</form>
</tr>
</table>	      </div>
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
					
</div>
			</section>
<!-- content -->

		</div>
	</div>
<script type="text/javascript">
Cufon.now();
</script>
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

