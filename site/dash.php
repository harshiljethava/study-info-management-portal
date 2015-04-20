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
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-1.5.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Molengo_400.font.js"></script>
<script type="text/javascript" src="js/Expletus_Sans_400.font.js"></script>
<script type="text/javascript" src="js/dash.js"></script>
<script type="text/javascript" src="js/JSPfile.js"></script>

<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
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

<body id="page2">
	<div class="body1">
		<div class="main">
<!-- header -->
			
			<header>
				<div class="wrapper">
					<nav>
						<ul id="menu">
							<li><a href="index.php">Home</a></li>
							<li><a href="dash.php">About Us</a></li>
                            <li><a href="dash.php">Dash board</a></li>
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
		<a href="log_outcode.php">Log out</a>
<!-- content -->
			<section id="content">
				<div class="box1">
				  <div class="wrapper">
				    <label id="w1">	Welcome , <?php 
					
	
						echo $_SESSION["username"]; ?>
                     </label>
				  </div>
                   <form name="form1" method="post"  >
					  <p>
					    <label>Enter Semester:
	                      <select name="select2"  >
      <option value="se" >6th IT</option>
      
	    </select>
					    </label>
					  </p>
					<form name="form2" method="post" action="link_fetch.php"  >
					
					  <p>
					    <label>Enter Subject:
	                      <select name="select1"  >
      <option value="se" >Software Engineering</option>
      <option value="msor" >Moduling Simulation Operation  Research</option>
      <option value="is" >Inforamtion Security</option>
      <option value="cg" >Computer Graphics</option>
      <option value="wtp " >Web Technology</option>
	    </select>
			
					    </label>
					  </p>
<p><input type="radio" name="rbb" value="th">Theory <input type="radio" name="rbb" value="pr">Practical
					  </p>
<p>
					   <center> <input type="submit" name="button" id="button" value="Submit" onclick="return validateDash()"></center>
					   </form>
					 <?php	
							if(isset($_POST['button'])){
							$conn=mysql_connect("localhost","root");
							$db=mysql_select_db("gecg");
							$subname=$_POST['select1'];
							$ra=$_POST['rbb'];
							if($ra=="th")
							{	
							$sql="select $subname from link_th ";
							$result=mysql_query($sql);
							while($row=mysql_fetch_array($result))
							{
								 ?><a  href="<?php echo($row[0]);?>"><?php echo($row[0]);?></a><br/><?php
		
							}
							}
							else
							{
							$sql2="select $subname from link_pr ";
							$result2=mysql_query($sql2);
							while($row=mysql_fetch_array($result2))
							{
								 ?><a  href="<?php echo($row[0]);?>"><?php echo($row[0]);?></a><br/><?php
		
							}	
							}
							}
						  ?>
						  
					 
					  </p>
			      
				  
					<p>&nbsp;</p>
                    		
				  <p>
					  <input type="submit" name="submit2" id="submit2" align="middle" value="Click here visit Question Answer forum section " onClick="window.location.href='main_forum.php';"></p>
				</div>
			</section>
<!-- content -->

		</div>
	</div>
<script type="text/javascript">
Cufon.now();
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
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

