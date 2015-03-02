<?php
session_start();
if(isset($_SESSION['unm']) && $_SESSION['unm']!="admin" && $_SESSION['unm']!="verifier")
{
	header("location:student.php");	
}
if(isset($_SESSION['unm']) && $_SESSION['unm']=="verifier")
{
	header("location:verifier.php");	
}
if(isset($_SESSION['unm']) && $_SESSION['unm']=="admin")
{
	header("location:admin.php");	
}
if(isset($_SESSION['exid']))
{
	header("location:exampage.php");	
	
}
?>
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
<li><img src="images/download.jpg" width="50px" height="50px" /></li>
  <li><a href="home.php">Home</a></li>
  <li><a href="aboutus.php">About Us</a></li>
  <li><a href="policy.php">Policy</a></li>
  <li class="active"><a href="login.php">User Dashboard</a></li>
</ul>

<div class="page-header">
  <h1>Here is your LOGIN! <small>Use it and enhance the knowledge.BEST LUCK.</small></h1>
</div>
<center>

<form action="loginp1.php" method="get" enctype="multipart/form-data">
<div class="input-group input-group-lg">
  
  <input type="text" class="form-control" placeholder="Username" name="usnm"/>
</div>
</br>
<div class="input-group input-group-lg">
  
  <input type="password" class="form-control" placeholder="Password" name="pswd"/>
</div>
</br>

<input type="submit" class="btn btn-primary btn-lg"  value="LOGIN" />
   
</form>
<?php
if(isset($_GET['msg']) && $_GET['msg']=="1")
echo '</br></br><div class="alert alert-danger alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Warning!</strong> Best check yo self, you are not looking too good.</div>';
?>
</center>
</div>
</body>
</html>