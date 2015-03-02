<?php
session_start();
include("db_connect.php");
extract($_GET);
$hx=$exno;
$q=mysql_query("select tmp_sr_no from temp_ex_data where srno='".$hx."'");
$qrr=mysql_fetch_array($q);
$q1=mysql_query("select * from ex_record where ex_id='".$hx."'");
$qrr1=mysql_fetch_array($q1);
printf($qrr1[7]);printf("<br />");
printf($qrr[0]);

if($qrr1[7]=="50")
{
	
			echo "<br />";
			$_SESSION['min']=1;
			if($qrr1[9]=="YES")
			{
				$_SESSION['max']=20;	
			}
			else
			{
				$_SESSION['max']=(50/$qrr1[9]);
			}
			$_SESSION['curr']=$qrr[0];
			$_SESSION['qcount']=1;
			$_SESSION['exid']=$hx;
			$_SESSION['lastmove']=1;
			
			
			
			
			
			
			
			
			header("location:exampage.php");	
}
if($qrr1[7]=="100")
{
	
			echo "<br />";
			$_SESSION['min']=1;
			if($qrr1[9]=="YES")
			{
				echo $_SESSION['max']=40;	
			}
			else
			{
				echo $_SESSION['max']=(50/$qrr1[9]);
			}
			echo $_SESSION['curr']=$qrr[0];
			echo $_SESSION['qcount']=1;
			echo $_SESSION['exid']=$hx;
			echo $_SESSION['lastmove']=1;
			
			
					header("location:exampage.php");

}
?>