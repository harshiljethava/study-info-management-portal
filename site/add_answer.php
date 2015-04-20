
<?php

error_reporting(0);
mysql_connect("localhost","root","");
mysql_select_db("gecg");

// get data that sent from form
$q1=$_POST['qid'];
$a1=$_POST['a'];
$n1=$_POST['name'];
$t1=$_POST['topic'];
$d1=date("d/m/y h:i:s"); //create date time

$sql="INSERT INTO forum_answer(question_id,a_name,a_answer,sub,date) VALUES('$q1','$n1','$a1','$t1','$d1')";
$result=mysql_query($sql);

if($result){
    header("location:main_forum.php");
    
}
else {
echo "ERROR".mysql_error();
}