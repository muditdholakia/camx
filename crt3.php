<?php
include("db_connect.php");
extract($_GET);
if(strlen($enm)<3)
{
	header("location:crt2.php?sm=error");	
}
else
{
if($gpnm!="ALL")
{
echo $gpnm;
$sql = "select * from group_master where group_id=".$_GET['gpnm'];
	$result = mysql_query($sql);
	$rx=mysql_fetch_array($result);
	echo $rx[2];
$sql1="INSERT INTO `admin_exam`(`serial_no`, `total_marks`, `group_id`,`individual_mark`,`group_members`,`ex_name`) VALUES (NULL,'".$tmm."','".$gpnm."','".$im."','".$rx[2]."','".$enm."')";
mysql_query($sql1);
header("location:admin.php?sms1=success");
}
else
{
$sql1="INSERT INTO `admin_exam`(`serial_no`, `total_marks`, `group_id`,`individual_mark`,`group_members`,`ex_name`) VALUES (NULL,'".$tmm."','ALL','".$im."','ALL',,'".$enm."')";
mysql_query($sql1);
header("location:admin.php?sms1=success");
}
}

?>