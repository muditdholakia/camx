<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">


<ul class="nav nav-pills">  
  <li class="active"><a href="verifier.php">VERIFIER</a></li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manager<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="verify.php">Verify Students</a></li>
          <li><a href="done.php">Verified Students</a></li>
          <li><a href="signout.php">Log Out</a></li>
        </ul>
  </li>
</ul><br /><br />
<table class="table table-hover">
<th>User</th><th>Document</th><th>Verify</th>
<?php
include("db_connect.php");

$sqr="select * from user_details where doc_path!='NULL' and vf_flag2!='yes' and u_type!='verifier' and u_type!='admin'";
$res=mysql_query($sqr);
while($r=mysql_fetch_array($res))
{
	echo "<tr><td>$r[4]</td><td><a href='".$r[14]."'>Download</a></td><td><a href='vf.php?srno=$r[0]'>Verify User</a></td></tr>";
}
?></table>
</body>
</html>