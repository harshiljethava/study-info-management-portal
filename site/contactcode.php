
<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="gecg"; // Database name
$tbl_name="feedback"; // Table name


mysql_connect("localhost","root","");
mysql_select_db("gecg");

// get data that sent from form
$n1=$_POST['c1'];
$m1=$_POST['c3'];
$email=$_POST['c2'];
$sql="INSERT INTO contact(name,email,msg) VALUES('$n1','$email','$m1')";
$result=mysql_query($sql);

if($result){
    header("location:success_contact.php");
    
}
else {
echo "ERROR";
}
mysql_close();
?>