<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("db_connect.php");
if(isset($_GET['sub']) && $_GET['sub']!=NULL && strlen($_GET['sub'])>=2)
{
$sql1="INSERT INTO sub_master(sub_id,sub_nm) VALUES (NULL,'".$_GET['sub']."')";

mysql_query($sql1);	
header("location:creatmanagesubject.php?sms=success");
}
else
{
	
header("location:creatmanagesubject.php?sms=alert");
}
?>
</body>
</html>