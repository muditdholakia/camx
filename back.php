<?php
session_start();
include("db_connect.php");
echo $_SESSION['curr'];
echo $_SESSION['qcount'];
extract($_POST);
if(isset($a))
{
		mysql_query("update temp_ex_data set tmp_ans='".$a."',atmptflag='yes' where tmp_sr_no='".$_SESSION['curr']."'");
}
if(isset($b))
{
		mysql_query("update temp_ex_data set tmp_ans='".$b."',atmptflag='yes' where tmp_sr_no='".$_SESSION['curr']."'");
}
if(isset($c))
{
		mysql_query("update temp_ex_data set tmp_ans='".$c."',atmptflag='yes' where tmp_sr_no='".$_SESSION['curr']."'");
}
if(isset($d))
{
		mysql_query("update temp_ex_data set tmp_ans='".$d."',atmptflag='yes' where tmp_sr_no='".$_SESSION['curr']."'");
}
if((!isset($a)) && (!isset($b)) && (!isset($c)) && (!isset($d)))
{
		mysql_query("update temp_ex_data set tmp_ans='' where tmp_sr_no='".$_SESSION['curr']."'");
}
$_SESSION['curr']=$_SESSION['curr']-1;
$_SESSION['qcount']=$_SESSION['qcount']-1;
$_SESSION['lastmove']=$_SESSION['qcount'];
header("location:exampage.php");
?>