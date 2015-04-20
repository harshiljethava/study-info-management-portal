<?php
$rc1=$_POST['rb1'];
$en=$_POST['txten'];
$p1=$_POST['oldpass'];
$p2=$_POST['newpass'];
$p3=$_POST['conpass'];
//$rc1="Teacher";
mysql_connect("localhost","root","");
mysql_select_db("gecg");

if($rc1=="Student")
{
    if($p2==$p3)
    {
        $sql1="update gecg_users set password='$p2' where en_no='$en'";
        mysql_query($sql1);
        header("location:login.php");
    }
    else
    {
        echo "password do not match";
    }
}
else  if($rc1=="Teacher")
{
   if($p2==$p3)
    {
        $sql2="update gecg_teachers set password='$p2' where id='$en'";
        mysql_query($sql2);
        header("location:login.php");
    }
    else
    {
        echo "password do not match ";
    }
}
else
{
    echo ERROR;
}

?>