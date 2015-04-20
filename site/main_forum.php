<?php
session_start();

if(!isset($_SESSION["username"])){
    
	header('Location:login.php');
}
error_reporting(0);
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
							<li><a href="feedback.php">Feedback</a></li>
							<li><a href="login.php">Log In</a></li>
							<li><a href="register.php">Register</a></li>
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
					    <div class="pad_left1">					  <?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="gecg"; // Database name
$tbl_name="forum_question"; // Table name

// Connect to server and select databse.
mysql_connect("localhost", "root", "")or die("cannot connect");
mysql_select_db("gecg")or die("cannot select DB");

$sql="SELECT * FROM forum_question ";
// OREDER BY id DESC is order result by descending

$result=mysql_query($sql);
?>

<table width="150%" border="3" align="center" cellpadding="3" cellspacing="1" bgcolor="#0099FF">
<tr>
<td width="3%" align="center" bgcolor="#0099FF"><strong>#</strong></td>
<td width="9%" align="center" bgcolor="#0099FF"><strong>Subject</strong></td>
<td width="35%" align="center" bgcolor="#0099FF"><strong>Question</strong></td>
<td width="5%" align="center" bgcolor="#0099FF"><strong>Asked By</strong></td>
<td width="10%" align="center" bgcolor="#0099FF"><strong>Date/Time</strong></td>
<td width="5%" align="center" bgcolor="#0099FF"><strong>Show Replies</strong></td>
</tr>

<?php 
										$conn=mysql_connect("localhost","root","");
										$db=mysql_select_db("gecg");
										
										$sql="select * from forum_question ";
										$result=mysql_query($sql);
										while($row=mysql_fetch_array($result))
										{
											?><tr><td><strong><?php echo($row['id']);?></strong></td><td><strong><?php echo($row['topic']);?><br></strong></td><td><?php echo($row['detail']);  ?></td><td><?php echo($row['name']);?></td><td><?php echo($row['date']);?></td>
                                            
                                            <td><?php $a=$row['id']; echo "<a href='que_ans.php?id=$a' />Show</a>";  ?></td></tr>
											<?php
										}
										
										?>
										




<tr>
<td colspan="6" align="right" bgcolor="#0099FF"><a href="create_topic.php"><strong>Ask a Question</strong> </a></td>
</tr>
</table>
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

