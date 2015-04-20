<?php


$r1=$_POST['rb'];
$submit=$_POST['submit'];
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("gecg");
	
	$uname1=$_POST['txten'];
	$pwd1=$_POST['txtpass'];
	
	if($submit=="Login")
	{
	if($r1=="Student")
	{
	$sql1="select * from gecg_users where en_no='$uname1' and password='$pwd1'";
	
	$result=mysql_query($sql1);
	
	}
	
	
	else if($r1=="Teacher")
	{
		
	$sql2="select * from gecg_teachers where id='$uname1' and password='$pwd1'";
	
	$result=mysql_query($sql2);
	
	}
	
	
	$row = mysql_num_rows($result);
	
	echo $row;
	
	
	if($row>0)
	{
		header("location:dash.php");
		session_start();
		
		$_SESSION["username"]=$uname1;	
		
		$_SESSION["password"]=$pwd1;
	}
	else
	{
		header("location:invalidlogin.php");
	}
	}
	
	else if($submit=="Forgot Password")
	{
		
				header("location:forgotpass.html");
	}
?>
