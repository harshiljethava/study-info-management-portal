<?php
$r1=$_POST['rb1'];
$en=$_POST['txten'];
$name=$_POST['txtname'];
$eid=$_POST['txteid'];
$con=$_POST['txtcont'];
$pass=$_POST['txtpass'];

mysql_connect("localhost","root","");
mysql_select_db("gecg");

if($r1=="Student")
{
    $sql1="INSERT INTO gecg_users(en_no,name,email,password,contact)VALUES('$en','$name','$eid','$pass','$con')";
mysql_query($sql1);
header("location:login.php");
}
else  if(r1=="Teacher")
{
    $sql2="INSERT INTO gecg_teachers(id,name,email,password,contact)VALUES('$en','$name','$eid','$pass','$con')";
mysql_query($sql2);
header("location:login.php");
}
else
{
    echo ERROR;
}

?>