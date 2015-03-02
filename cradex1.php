<?php
session_start();
include("db_connect.php");
extract($_GET);
$d=date("20ymd");
$sq="SELECT * FROM user_details where u_nm='".$_SESSION['unm']."'";
$res=mysql_query($sq);
$r=mysql_fetch_array($res);
echo $r[0];
$i=0;
$sql = "select * from admin_exam where group_id=".$_GET['gid'];
	$result = mysql_query($sql);
	$row1 = mysql_fetch_array($result);
	$mem=explode(",",$row1[4]);
	echo $mem[0];
	while(isset($mem[$i]))
	{
		if($mem[$i]==$r[0])
		{
			unset($mem[$i]);	
		}
		$i=$i+1;
	}
	$str=implode(",",$mem);
	echo $str;
	$qre1="UPDATE `admin_exam` SET `group_members`='$str' WHERE serial_no=".$id;
	mysql_query($qre1);
if($total==50 && $im==1)
	{
			$qx=mysql_query("insert into ex_record(ex_id,u_id,date_exam,attempt_que,discard_que,marks_obtained,ex_status,total_mark,timer,random) values ('NULL','".$_SESSION['unm']."','".$d."','NULL','NULL','NULL','PENDING','50','5400','1')");
			$xx=mysql_insert_id();
			echo "<br />";
			echo $xx;
			$q1=mysql_query("select * from ex_data where mark='1' order by rand() limit 50");
			while($r1=mysql_fetch_array($q1))
			{
				echo $r1[0];
				echo $r1[2];
				echo "<br />";
				$qr1=mysql_query("insert into temp_ex_data(tmp_sr_no,srno,ex_que_id,tmp_que_str) values (NULL,'".$xx."','".$r1[0]."','".$r1[2]."')");
			}
			
			
			
				$qry=mysql_query("select tmp_sr_no from temp_ex_data where srno='".$xx."'");
			$qrr=mysql_fetch_array($qry);
			echo $qrr[0];
			echo "<br />";
			$_SESSION['min']=1;
			$_SESSION['max']=50;
			$_SESSION['curr']=$qrr[0];
			$_SESSION['qcount']=1;
			$_SESSION['exid']=$xx;
			$_SESSION['lastmove']=1;
			
			
			
			header("location:exampage.php");
	}
	if($total==50 && $im==2)
	{
			$qx=mysql_query("insert into ex_record(ex_id,u_id,date_exam,attempt_que,discard_que,marks_obtained,ex_status,total_mark,timer,random) values ('NULL','".$_SESSION['unm']."','".$d."','NULL','NULL','NULL','PENDING','50','5400','2')");
			$xx=mysql_insert_id();
			echo "<br />";
			echo $xx;
			$q1=mysql_query("select * from ex_data where mark='1' order by rand() limit 25");
			while($r1=mysql_fetch_array($q1))
			{
				echo $r1[0];
				echo $r1[2];
				echo "<br />";
				$qr1=mysql_query("insert into temp_ex_data(tmp_sr_no,srno,ex_que_id,tmp_que_str) values (NULL,'".$xx."','".$r1[0]."','".$r1[2]."')");
			}
			
			
			
				$qry=mysql_query("select tmp_sr_no from temp_ex_data where srno='".$xx."'");
			$qrr=mysql_fetch_array($qry);
			echo $qrr[0];
			echo "<br />";
			$_SESSION['min']=1;
			$_SESSION['max']=25;
			$_SESSION['curr']=$qrr[0];
			$_SESSION['qcount']=1;
			$_SESSION['exid']=$xx;
			$_SESSION['lastmove']=1;
			
			
			header("location:exampage.php");
	}
	if($total==100 && $im==1)
	{
			$qx=mysql_query("insert into ex_record(ex_id,u_id,date_exam,attempt_que,discard_que,marks_obtained,ex_status,total_mark,timer,random) values ('NULL','".$_SESSION['unm']."','".$d."','NULL','NULL','NULL','PENDING','100','10800','1')");
			$xx=mysql_insert_id();
			echo "<br />";
			echo $xx;
			$q1=mysql_query("select * from ex_data where mark='1' order by rand() limit 100");
			while($r1=mysql_fetch_array($q1))
			{
				echo $r1[0];
				echo $r1[2];
				echo "<br />";
				$qr1=mysql_query("insert into temp_ex_data(tmp_sr_no,srno,ex_que_id,tmp_que_str) values (NULL,'".$xx."','".$r1[0]."','".$r1[2]."')");
			}
			
			
			
				$qry=mysql_query("select tmp_sr_no from temp_ex_data where srno='".$xx."'");
			$qrr=mysql_fetch_array($qry);
			echo $qrr[0];
			echo "<br />";
			$_SESSION['min']=1;
			$_SESSION['max']=100;
			$_SESSION['curr']=$qrr[0];
			$_SESSION['qcount']=1;
			$_SESSION['exid']=$xx;
			$_SESSION['lastmove']=1;
		
			header("location:exampage.php");
	}
		if($total==100 && $im==2)
	{
			$qx=mysql_query("insert into ex_record(ex_id,u_id,date_exam,attempt_que,discard_que,marks_obtained,ex_status,total_mark,mode_exam,timer,difficulty,random,group_no) values ('NULL','".$_SESSION['unm']."','".$d."','NULL','NULL','NULL','PENDING','100','10800','2')");
			$xx=mysql_insert_id();
			echo "<br />";
			echo $xx;
			$q1=mysql_query("select * from ex_data where mark='2' order by rand() limit 50");
			while($r1=mysql_fetch_array($q1))
			{
				echo $r1[0];
				echo $r1[2];
				echo "<br />";
				$qr1=mysql_query("insert into temp_ex_data(tmp_sr_no,srno,ex_que_id,tmp_que_str) values (NULL,'".$xx."','".$r1[0]."','".$r1[2]."')");
			}
			
			
			
				$qry=mysql_query("select tmp_sr_no from temp_ex_data where srno='".$xx."'");
			$qrr=mysql_fetch_array($qry);
			echo $qrr[0];
			echo "<br />";
			$_SESSION['min']=1;
			$_SESSION['max']=50;
			$_SESSION['curr']=$qrr[0];
			$_SESSION['qcount']=1;
			$_SESSION['exid']=$xx;
			$_SESSION['lastmove']=1;
			
			header("location:exampage.php");
	}
		if($total==100 && $im==4)
	{
			$qx=mysql_query("insert into ex_record(ex_id,u_id,date_exam,attempt_que,discard_que,marks_obtained,ex_status,total_mark,mode_exam,timer,difficulty,random,group_no) values ('NULL','".$_SESSION['unm']."','".$d."','NULL','NULL','NULL','PENDING','100','10800','4')");
			$xx=mysql_insert_id();
			echo "<br />";
			echo $xx;
			$q1=mysql_query("select * from ex_data where mark='4' order by rand() limit 25");
			while($r1=mysql_fetch_array($q1))
			{
				echo $r1[0];
				echo $r1[2];
				echo "<br />";
				$qr1=mysql_query("insert into temp_ex_data(tmp_sr_no,srno,ex_que_id,tmp_que_str) values (NULL,'".$xx."','".$r1[0]."','".$r1[2]."')");
			}
			
			
			
				$qry=mysql_query("select tmp_sr_no from temp_ex_data where srno='".$xx."'");
			$qrr=mysql_fetch_array($qry);
			echo $qrr[0];
			echo "<br />";
			$_SESSION['min']=1;
			$_SESSION['max']=25;
			$_SESSION['curr']=$qrr[0];
			$_SESSION['qcount']=1;
			$_SESSION['exid']=$xx;
			$_SESSION['lastmove']=1;
			
			header("location:exampage.php");
	}
?> 