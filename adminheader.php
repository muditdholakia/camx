<?php
session_start();
if(!isset($_SESSION['unm']) || !isset($_SESSION['psw']))
{
	header("location:error.php");	
	
}
if(isset($_SESSION['exid']))
{
	header("location:exampage.php");	
	
}
include("db_connect.php");
$sq="SELECT * FROM user_details where u_nm='admin'";
$res=mysql_query($sq);
$r=mysql_fetch_array($res);
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
  <li class="active"><a href="admin.php">ADMIN</a></li>
   <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">User Manager<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="creatuser.php">Create User</a></li>
          <li><a href="manageuser.php">Manage User </a></li>
        </ul>
  </li>
  <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Question Manager<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="creatquestion.php">Create Question</a></li>
          <li><a href="managequestion.php">Manage Questions</a></li>
          <li><a href="creatmanagesubject.php">Create/Manage Subjects</a></li>
        </ul>
  </li>
   <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Exam Manager<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="createxam.php">Create Exam</a></li>
          <li><a href="dlexad.php">Delete Exam</a></li>
          <li><a href="group.php">Groups</a></li>
        </ul>
  </li>
  <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Feeds<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="feedbackadmin.php">Feed Back</a></li>
          <li><a href="signout.php">Log out</a></li>
        </ul>
  </li>
  
 
  <li style="padding-left:300px"><img src="<?php echo $r[15];?>" class="img-thumbnail" height="150px" width="150px"  /></li>
</ul>
