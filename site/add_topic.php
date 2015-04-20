
<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="gecg"; // Database name
$tbl_name="forum_question"; // Table name

// Connect to server and select database.
/*mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");*/
mysql_connect("localhost","root","");
mysql_select_db("gecg");

// get data that sent from form
$topic=$_POST['topic'];
$detail=$_POST['detail'];
$name=$_POST['name'];
$email=$_POST['email'];

$datetime=date("d/m/y h:i:s"); //create date time

$sql="INSERT INTO forum_question(topic,detail,name,email,date)VALUES('$topic','$detail','$name','$email','$datetime')";
$result=mysql_query($sql);

if($result){
    header("location:success_topic.php");
    
}
else {
echo "ERROR";
}
mysql_close();
?>