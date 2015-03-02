<?php
include("db_connect.php");
extract($_GET);
echo $gpnm;
$i=0;
$sqr="select * from group_master where group_id=".$gpnm;
$result1 = mysql_query($sqr);
$row1 = mysql_fetch_array($result1);
$str2=$row1[2];
$str1=implode(",",$b);echo "<br />";
$str=$str2.",".$str1;
echo $str;
$qre="UPDATE `group_master` SET `group_members`='$str' WHERE group_id=".$_GET['gpnm'];
mysql_query($qre);
$qre1="UPDATE `admin_exam` SET `group_members`='$str' WHERE group_id=".$_GET['gpnm'];
	mysql_query($qre1);
header("location:group.php?sms3=success");
?>