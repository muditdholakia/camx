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
  <li class="active"><a href="policy.php">Policy</a></li>
  <li><a href="login.php">User Dashboard</a></li>
 
  
</ul>

<div class="page-header">
  <h1>Polict of company <small>Towards the small large developments.</small></h1>
</div>


<div class="panel panel-default panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"><b>Present Scene</b></h3>
  </div>
  <div class="panel-body">
  <div>
    <div style="float:left"><img src="images/black (97).jpg" height="150px" width="150px" style="padding-right:20px" /></div><div align="justify">To understand company’s current situation and problem we verified the workflow manual provided by the company. We observed the conventional steps performed by the company which is time consuming. The procedural workflow is as below.

1.	Communication with customer and contract for the management of examination, training, assessment.
2.	Hiring of experts for crating papers of respective subjects .(Offline mode) 
3.	Dealing with the Training Partners and Expert Assessors for the students’ training and teaching purpose.
4.	Collecting examination forms and different documents with the exam fees from student. (offline mode/ postal mode)
5.	Conduction examination at customer site.
6.	Collection of papers and assessment by the experts.
7.	Marks entry after assessment.
8.	Result display via excel sheet preparation and forwarding it to the respective students through mail.
9.	Result Hard-Copy distribution.

As above procedure suggests it starts with hiring of experts.
After a contract with customer. Company also provides customer with their training centers if customer is willing to go for it and do not have regional training centers.
		But as per reference of company’s work manual we observed the selection procedure of experts before personal interview is lengthy and in written examination mode. 
        To solve problem of TUV SUD, South Asia we observed their quality manual designed by their senior management. Thus we came to know that a web application which is capable enough for solving the exact problem and fulfilling the company’s requirements is to be developed yet.
		We have taken references of such systems for online examinations like learn hub, GATEFORUM, ACE academy, India-Bix,   engineering institutes etc. 
		Hence it is very much clear to us now that systems which are existing in current situation can be combined or partially referred and deployed to build the solution.
		Using quality manual of TUV SUD’s senior management and the work-charts the research was very much feasible to deal with and they can be easily used for problem scope as well as the solution.
		To handle the documentation procedure of company a solution research can be put on effectively using the reference of www.gujacpc.nic.in where online mode of the details and document submission is provided.
		To deal with the expert selection and examination of students a system like www.learnhub.com and, private companies like gate-forum, ace, RTO-tests is observed and can be used as a reference for development and deployment of company’s requirement.
		Thus by taking such references and some literature reviews a new evolutionary, portable, secure, feasible and cost effective system can be built.   	


  </div></div></div></div>
  </br></br>

</div>
</body>
</html>