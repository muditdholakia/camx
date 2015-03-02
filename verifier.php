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
<?php
if(isset($_GET['sms']))
{
echo '<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Verification!</strong> Done.
</div>';}?>
<div class="jumbotron">
  <h1>Hello, Verifier!</h1>
  <p>Go through the exciting verification application using menues.The training is provided to you and also effective interface of CAMX will guide you for verification procedure.<ul><li>1.Download document</li><li>2.Go through its verification</li><li>3.Verify the user.</li></ul></p>
  
</div>
</body>
</html>