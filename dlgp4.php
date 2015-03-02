<?php
include("db_connect.php");
$i=0;
$j=0;
$sql = "select * from group_master where group_id=".$_GET['grno'];
	$result = mysql_query($sql);
	$row1 = mysql_fetch_array($result);
	$mem=explode(",",$row1[2]);
	while(isset($mem[$i]))
	{
		if($mem[$i]==$_GET['srno'])
		{
			unset($mem[$i]);	
		}
		$i=$i+1;
	}
	$str=implode(",",$mem);
	$qre="UPDATE `group_master` SET `group_members`='$str' WHERE group_id=".$_GET['grno'];
	mysql_query($qre);
	$qre1="UPDATE `admin_exam` SET `group_members`='$str' WHERE group_id=".$_GET['grno'];
	mysql_query($qre1);
	header("location:dlgp.php?sms3=success");
?>
