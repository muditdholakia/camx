<?php
session_start();
if(!isset($_SESSION['unm']))
{
	header("location:error.php");	
}
if(isset($_SESSION['exid']))
{
	header("location:exampage.php");	
	
}
include("db_connect.php");
$sq="SELECT * FROM user_details where u_nm='".$_SESSION['unm']."'";
$res=mysql_query($sq);
$r=mysql_fetch_array($res);

$up1=strtoupper(substr($r[1],0,1));
	$lr1=substr($r[1],1,strlen($r[1])-1);
	$final1=$up1.$lr1;
	$up2=strtoupper(substr($r[2],0,1));
	$lr2=substr($r[2],1,strlen($r[2])-1);
	$final2=$up2.$lr2;
	$_SESSION['f1']=$final1;
	$_SESSION['f2']=$final2;
	$_SESSION['imp']=$r[15];
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
  <li class="active"><a href="student.php">Home</a></li>
  <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Exams<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="selfpractise.php">Self Practise</a></li>
          <li><a href="adminexam.php">Admin Exams</a></li>
          <li><a href="subex.php">Subjective Exams</a></li>
         
          
        </ul>
  </li>
  <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Results<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="selfresults.php">Test Results</a></li>
        </ul>
  </li>
  <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['f1']." ".$_SESSION['f2'];?><b class="caret"></b></a>
        <ul class="dropdown-menu">
         
          <li><a href="feedback.php">FeedBack</a></li>
          <li><a href="updetails.php">Update Details</a></li>
          <li class="divider"></li>
          <li><a href="signout.php">Log Out</a></li>
        </ul>
  </li>
  <li style="padding-left:610px"><img src="<?php echo $_SESSION['imp'];?>" class="img-thumbnail" height="150px" width="150px"  /></li>
</ul>