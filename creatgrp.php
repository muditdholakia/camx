<?php
include("db_connect.php");
extract($_GET);
echo $gpnm;
$i=0;
$str=implode(",",$a);echo "<br />";
echo $str;
$sql1="INSERT INTO `group_master`(`group_id`, `group_name`, `group_members`) VALUES (NULL,'$gpnm','$str')";
mysql_query($sql1);
header("location:group.php?sms1=success");
?>