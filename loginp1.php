<?php
session_start();
if(!isset($_GET['usnm']))
{
	header("location:error.php");	
}
include("db_connect.php");
extract($_GET);
$count=0;
$u=mysql_query("SELECT * FROM user_details where u_nm='".$usnm."'");
if($row = mysql_fetch_array($u))
{
	$count=$count+1;	
}
echo $count;
echo $row[14];
if($row[11]==NULL)
{
	echo "null";	
}
if($row[15]==NULL)
{
	echo "null";	
}
if($row[5]==$pswd && $count==1)
{
	if($row[9]=="student")
	{
		if($row[14]!=NULL && $row[11]==NULL && $row[15]==NULL)
		{
			
				header("location:loginp2.php?sms1=1&unm=".$usnm."&psw=".$pswd);
			
		}
		else if($row[14]!=NULL && $row[11]!=NULL && $row[15]==NULL)
		{
			$_SESSION['unm']=$usnm;
				$_SESSION['psw']=$pswd;
			header("location:details.php?unm=".$usnm."&psw=".$pswd);
		}
		else if($row[15]!=NULL)
			{
				$_SESSION['unm']=$usnm;
				$_SESSION['psw']=$pswd;
				header("location:student.php?unm=".$usnm."&psw=".$pswd."&sms=".$usnm);
				
			}
			
		else
		{
			header("location:loginp3.php?unm=".$usnm."&psw=".$pswd);	
		}
	}
	if($row[9]=="verifier")
	{
		$_SESSION['unm']=$usnm;
				$_SESSION['psw']=$pswd;
		header("location:verifier.php?unm=".$usnm."&psw=".$pswd);	
	}
	if($row[9]=="admin")
	{$_SESSION['unm']=$usnm;
				$_SESSION['psw']=$pswd;
		header("location:admin.php?unm=".$usnm."&psw=".$pswd);	
	}
	
}
else if($count==0)
	{
		header("location:login.php?msg=1");
	}
else
	{
		header("location:login.php?msg=1");
	}

?>