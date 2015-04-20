<?php
$r1=$_POST['rbb'];
$sub=$_POST['select1'];

mysql_connect("localhost","root","");
mysql_select_db("gecg");

if($r1=="th")
{
    $sql1="select $sub from  link_th  ";
mysql_query($sql1);
echo "theory";
}
elseif($r1=="pr")
{
    $sql2="select $sub from  link_pr  ";
mysql_query($sql2);
echo "practical";
}
else
{
    echo ERROR;
}
?>