<?php
session_start();
include("db_connect.php");
extract($_POST);
echo strlen($feedback);
echo $_SESSION['unm'];
if(isset($feedback) && strlen($feedback)>=10)
{
$qre1="UPDATE `user_details` SET `feed_back`='".$_POST['feedback']."' where u_nm='".$_SESSION['unm']."'";
mysql_query($qre1);
header("location:feedback.php?sms=success");
}
else
{
header("location:feedback.php?sms1=error");
}
?>