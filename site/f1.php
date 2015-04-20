<?php

mysql_connect('localhost','root');
mysql_select_db("gecg");
require("/phpmailer/PHPMailer-master/PHPMailerAutoload.php");
include '/phpmailer/PHPMailer-master/class.phpmailer.php' ;
include '/phpmailer/PHPMailer-master/class.smtp.php';
$id=$_POST['email'];
$ra=$_POST['rb'];
$ranum=rand(10000,999999);
$mail = new PHPMailer();
$datetime=date("d/m/y h:i:s");
$mail->IsSMTP();  // telling the class to use SMTP
$mail->Host     = "smtp.mandrillapp.com"; 
$mail->SMTPAuth = true; 
$mail->SMTPSecure = 'tls';
$mail->Port = 587; 
$mail->Username = "harshiljethava7@gmail.com"; // SMTP username
$mail->Password = "CWhVDlzEBPGqRIvilaecJw"; // SMTP password

$mail->From     = "harshil12@gecg28.ac.in";
$mail->FromName = 'GECG Learn Center';
$mail->AddAddress($id);

$mail->Subject  = "Message for you forgotten Password";
$mail->Body     = "Here is your new password for account : $ranum ";
$mail->WordWrap = 50;
$mail->isHTML(true);

$result2 = mysql_query("SELECT * FROM gecg_users WHERE email='$id'");
$result3 = mysql_query("SELECT * FROM gecg_teachers WHERE email='$id'");
echo $result2;
if(mysql_fetch_array($result2) !== false||mysql_fetch_array($result3) !== false)
{
    if(!$mail->Send()) {
        echo 'Message was not sent.';
        echo 'Mailer error: ' . $mail->ErrorInfo;
    }
    else {
        $sql = "INSERT INTO  gecg_forgotpwd VALUES ('$id', '$ranum','datetime')";
        if($ra=="Student")
        {
                $sql = "update gecg_users set password='$ranum' where email='$id'";
        }
        else if ($ra=="Teacher")
        {
            $sql = "update gecg_teachers set password='$ranum' where email='$id'";
        }
        else
        {
            echo "password cannot change successfully ";
        }
        mysql_query($sql);
        header("location:msg.php");
        }
}
else
{
    echo 
  "<script type=\"text/javascript\">".
  "window.alert('You have entered Invalid Email ID');".
  "top.location = 'forgotpass.html';". 
  "</script>"; 
}
?>
    