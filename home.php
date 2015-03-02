<?php
session_start();
if(isset($_SESSION['unm']) && $_SESSION['unm']=="verifier")
{
	header("location:verifier.php");	
}
if(isset($_SESSION['unm']) && $_SESSION['unm']=="admin")
{
	header("location:admin.php");	
}
if(isset($_SESSION['unm']) && $_SESSION['unm']!="admin" && $_SESSION['unm']!="verifier")
{
	header("location:student.php");	
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
  <li class="active"><a href="home.php">Home</a></li>
  <li><a href="aboutus.php">About Us</a></li>
  <li><a href="policy.php">Policy</a></li>
  <li><a href="login.php">User Dashboard</a></li>
</ul>
<div class="page-header">
  <h1>CAMX CAMX's Evolutionary Examination System <small>A welcomenote to the visitor.</small></h1>
</div>
<div class="panel panel-default panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"><b>The world of examination</b></h3>
  </div>
  <div class="panel-body">
  <div>

    <div style="float:left"><img src="images/Calculator.png" /></div><div align="justify">Examination is all about learning the skills and testing them. But now a days due to the fast growth of educational assets it is difficult to stay in competition. So better way is to test ourselves. Nowadays people have so fast life so there is a system needed that can be accessible to the user at any time at any place. So evaluation can be done through online exam. Here team is designing and implementing the online exam system for CAMX CAMX South Asia. By this way this application is just going to increase the level of knowledge sharing. It is the way through which students can openly give exams. This application is open for company so any private group owners can use this application by company’s permission having only browser installed into their computers. Also this application is going to give full open environment as a single login has access to every subject exam. This application is also making this examination fully featured so that it can achieve all the dynamic aspects of examination environment. This application is introducing such features to company for their examination that company can have their best performance with less resources and high efficiency. Thus by using such kind of application by designers there can be a huge boost in research and development of this kinds of web applications.
  </div></div></div></div>
  </br></br>
  <div class="panel panel-default panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"><b>CAMX</b></h3>
  </div>
  <div class="panel-body">
  <div>
    <div style="float:left"><img src="images/AdressBook.png" /></div><div align="justify">
Web application is named as CAMX. In real world it is such difficult to gain all the
knowledge in each horizon of study. These all skills can be examined by the exam .So we’ve
created here a user login and user panel to generate exams and to check performance .User
interface are such friendly that any unknown can also follow simple steps and can go for the
test. Here as to make exam genuine we’ve designed and coded this flow of actions in such a
way of TOUCH AND GO situation that if a user has once given the answer and submitted it
then one can change the answer only using any back points but cannot discard it. We’ve also
made this system available for pending exams. As if user is able to give exam in error situations
like session break or power failure. The exam can be submitted at any time by user. We are
providing all the front ends and back ends to achieve both MCQ as well as Scanned copy
examination and verification. Here user can be a student or a paper verifier.  </div></div></div>
</div>
</br></br>
  <div class="panel panel-default panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title"><b>Application measures</b></h3>
  </div>
  <div class="panel-body">
  <div>
    <div style="float:left"><img src="images/applications.png" /></div><div align="justify">
The main purpose of creating this web application is to enhance the facility of giving
examination online in a feasible way that company can easily deal with examination
management. It is a way to catch the audience from students themselves using such kind of
web apps. Here target audience is student so most important features are made in such a way
to make exam meaning full and creating an enthusiastic exam by technology.
Other main objective of creating this web app is to make functionality of the admin site
easy. Here a module is designed in such a way that admin has several easy steps to perform in
such a way that no difficult situation occur.
Also one of the best goal of this web app is to make student aware of online exams and
their career. In such way the main purpose of this system can be satisfied.
Thus using standard and powerful data dictionaries of question and answer the objective
is to provide examination experience online and most feasible.
Using this examination system it is also possible to check the capabilities of various
subjects of various streams so that one can improve the knowledge and again appear for the
exam using better approach of study.
At last the most common goal of web site is to gain certain popularity on web to get the
crowd and fame so that using feedback this system can be enhanced further more with better
and improved functionality.
So the overall purpose and objective is to facilitate real-time exam environment online
with ease and less difficulty so that company can manage their examination process very
effectively and can get benefited by its performance. It will also increase the brand value of
consultancy of company. </div></div></div>
</div>
  </div>
</body>
</html>