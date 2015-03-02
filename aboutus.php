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
  <li class="active"><a href="aboutus.php">About Us</a></li>
  <li><a href="policy.php">Policy</a></li>
  <li><a href="login.php">User Dashboard</a></li>
 </ul>

<div class="page-header">
  <h1>We THE CAMX CAMX.<small>This is how we lead the innovation</small></h1>
</div>

<div class="panel panel-default panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"><b>CAMX CAMX,South Asia</b></h3>
  </div>
  <div class="panel-body">
  <div>
    <div style="float:left"><img src="images/download.jpg" width="150px" height="150px" /></div><div align="justify">
  TÜV SÜD is one of the world's leading technical service organizations. Established over 140 years ago as a steam boiler inspection association, TÜV SÜD is a globally active, future-oriented company. TÜV SÜD’s teams of specialists are engaged in optimizing technology, systems and know-how, and thus act as process partners, enhancing the competitive strength of their customers throughout the world. Their objectives are to provide their customers with solutions based on reliability, safety, quality, environmental protection as well as cost effectiveness.

		Due to growing demand of qualitative services and expertized environment it is daunting task for each and every company or any asset to assess proper skills and knowledge for desired outcome. 
</div></div></div></div>
  </br></br>
  
  


<div class="panel panel-default panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"><b>Effective Solution</b></h3>
  </div>
  <div class="panel-body">
  <div>
    <div style="float:left"><img src="images/black (69).jpg" width="150px" height="150px" /></div><div align="justify"><font
    style="padding-left:20px">
 Using effective Quality Manual of the CAMX CAMX company any organization can solve the problem of any kind oof capital sector.As the team of experts </font><font style="padding-left:20px">work for the technical as well as managerial services of the company the solution will be quite effective.After a contract with customer. Company also </font><font style="padding-left:20px">provides customer with their training centers if customer is willing to go for it and do not have regional training centers.The major issue being faced</font><font style="padding-left:20px"> bycompany in recent time is managing the client’s requirements in examination. The present exam management system they have is like handwritten</font><font style="padding-left:20px"> and delivered kind of scenario. </font> 
</div></div></div></div>
  </br></br>
  
</div>
</body>
</html>