<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("db_connect.php");
$qr="UPDATE user_details SET vf_flag2='yes' where u_id='".$_GET['srno']."'";
mysql_query($qr);
header("location:verifier.php?sms=success");

?>
</body>
</html>