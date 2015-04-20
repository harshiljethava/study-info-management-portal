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
							<li><a href="feedback.html">Feedback</a></li>
							<li><a href="login.html">Log In</a></li>
							<li><a href="register.html">Register</a></li>
							<li class="end"><a href="contact.html">Contact Us</a></li>
						</ul>
					</nav>
					
				</div>
				<div class="wrapper">
					<h1><a href="index.html" id="logo">Learn Center</a></h1>
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
					  <article class="col1">
					    <div class="pad_left1">	<?php

$host="localhost"; // Host name
$username=""; // Mysql username
$password=""; // Mysql password
$db_name="test"; // Database name
$tbl_name="forum_question"; // Table name

// Connect to server and select databse.
mysql_connect("localhost", "root", "")or die("cannot connect");
mysql_select_db("gecg")or die("cannot select DB");

// get value of id that sent from address bar
//$id=$_GET['id'];

$sql="SELECT * FROM forum_question WHERE id=21";
$result=mysql_query($sql);

$rows=mysql_fetch_array($result);
?>

<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#FFFFFF">
<tr>
<td bgcolor="#FFFFFF"><strong><? echo $rows['topic']; ?></strong></td>
</tr>

<tr>
<td bgcolor="#FFFFFF"><? echo $rows['detail']; ?></td>
</tr>

<tr>
<td bgcolor="#FFFFFF"><strong>By :</strong> <? echo $rows['name']; ?> <strong>Email : </strong><? echo $rows['email'];?></td>
</tr>

<tr>
<td bgcolor="#FFFFFF"><strong>Date/time : </strong><? echo $rows['datetime']; ?></td>
</tr>
</table></td>
</tr>
</table>
<BR>

<?php

$tbl_name2="forum_answer"; // Switch to table "forum_answer"

$sql2="SELECT * FROM $tbl_name2 WHERE qid=62";
$result2=mysql_query($sql2);

while($rows=mysql_fetch_array($result2)){
?>

<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td bgcolor="#FFFFFF"><strong>ID</strong></td>
<td bgcolor="#F8F7F1">:</td>
<td bgcolor="#F8F7F1"><? echo $rows['a_id']; ?></td>
</tr>
<tr>
<td width="18%" bgcolor="#F8F7F1"><strong>Name</strong></td>
<td width="5%" bgcolor="#F8F7F1">:</td>
<td width="77%" bgcolor="#F8F7F1"><? echo $rows['a_name']; ?></td>
</tr>
<tr>
<td bgcolor="#F8F7F1"><strong>Email</strong></td>
<td bgcolor="#F8F7F1">:</td>
<td bgcolor="#F8F7F1"><? echo $rows['a_email']; ?></td>
</tr>
<tr>
<td bgcolor="#F8F7F1"><strong>Answer</strong></td>
<td bgcolor="#F8F7F1">:</td>
<td bgcolor="#F8F7F1"><? echo $rows['a_answer']; ?></td>
</tr>
<tr>
<td bgcolor="#F8F7F1"><strong>Date/Time</strong></td>
<td bgcolor="#F8F7F1">:</td>
<td bgcolor="#F8F7F1"><? echo $rows['a_datetime']; ?></td>
</tr>
</table></td>
</tr>
</table><br>

 

<?php
}

$sql3="SELECT view FROM $tbl_name WHERE id='$id'";
$result3=mysql_query($sql3);

$rows=mysql_fetch_array($result3);
$view=$rows['view'];

 

// if have no counter value set counter = 1
if(empty($view)){
$view=1;
$sql4="INSERT INTO $tbl_name(view) VALUES('$view') WHERE id='$id'";
$result4=mysql_query($sql4);
}

 

// count more value
$addview=$view+1;
$sql5="update $tbl_name set view='$addview' WHERE id='$id'";
$result5=mysql_query($sql5);

mysql_close();
?>


<BR>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="add_answer.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td width="18%"><strong>Name</strong></td>
<td width="3%">:</td>
<td width="79%"><input name="a_name" type="text" id="a_name" size="45"></td>
</tr>
<tr>
<td><strong>Email</strong></td>
<td>:</td>
<td><input name="a_email" type="text" id="a_email" size="45"></td>
</tr>
<tr>
<td valign="top"><strong>Answer</strong></td>
<td valign="top">:</td>
<td><textarea name="a_answer" cols="45" rows="3" id="a_answer"></textarea></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input name="id" type="hidden" value="<? echo $id; ?>"></td>
<td><input type="submit" name="Submit" value="Submit"> <input type="reset" name="Submit2" value="Reset"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
				      </div>
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
					<form name="form2" method="post" action="">
					  <p>&nbsp;</p>
<p>&nbsp;</p>
					  <p>
					   <center></center>
					  </p>
			      </form>
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

