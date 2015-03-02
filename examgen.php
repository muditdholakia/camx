<?php
session_start();
include("db_connect.php");
extract($_GET);
$d=date("20ymd");



if($mrk=="100")
	{
			$qx=mysql_query("insert into ex_record(ex_id,u_id,date_exam,attempt_que,discard_que,marks_obtained,ex_status,total_mark,timer,random) values ('NULL','".$_SESSION['unm']."','".$d."','NULL','NULL','NULL','PENDING','100','10800','YES')");
			$xx=mysql_insert_id();
			echo "<br />";
			echo $xx;
			$q1=mysql_query("select * from ex_data where mark='1' order by rand() limit 10");
			while($r1=mysql_fetch_array($q1))
			{
				echo $r1[0];
				echo $r1[2];
				echo "<br />";
				$qr1=mysql_query("insert into temp_ex_data(tmp_sr_no,srno,ex_que_id,tmp_que_str) values (NULL,'".$xx."','".$r1[0]."','".$r1[2]."')");
			}
			$q2=mysql_query("select * from ex_data where mark='2' order by rand() limit 10");
			while($r2=mysql_fetch_array($q2))
			{
				echo $r2[0];
				echo $r2[2];
				echo "<br />";
				$qr2=mysql_query("insert into temp_ex_data(tmp_sr_no,srno,ex_que_id,tmp_que_str) values (NULL,'".$xx."','".$r2[0]."','".$r2[2]."')");
			}
			$q3=mysql_query("select * from ex_data where mark='3' order by rand() limit 10");
			while($r3=mysql_fetch_array($q3))
			{
				echo $r3[0];
				echo $r3[2];
				echo "<br />";
				$qr3=mysql_query("insert into temp_ex_data(tmp_sr_no,srno,ex_que_id,tmp_que_str) values (NULL,'".$xx."','".$r3[0]."','".$r3[2]."')");
			}
			$q4=mysql_query("select * from ex_data where mark='4' order by rand() limit 10");
			while($r4=mysql_fetch_array($q4))
			{
				echo $r4[0];
				echo $r4[2];
				echo "<br />";
				$qr4=mysql_query("insert into temp_ex_data(tmp_sr_no,srno,ex_que_id,tmp_que_str) values (NULL,'".$xx."','".$r4[0]."','".$r4[2]."')");
			}
			$qry=mysql_query("select tmp_sr_no from temp_ex_data where srno='".$xx."'");
			$qrr=mysql_fetch_array($qry);
			echo $qrr[0];
			echo "<br />";
			$_SESSION['min']=1;
			$_SESSION['max']=40;
			$_SESSION['curr']=$qrr[0];
			$_SESSION['qcount']=1;
			$_SESSION['exid']=$xx;
			$_SESSION['lastmove']=1;
			
			
			
			
			
			
			header("location:exampage.php");
	}
	if($mrk=="50")
	{
			$qx=mysql_query("insert into ex_record(ex_id,u_id,date_exam,attempt_que,discard_que,marks_obtained,ex_status,total_mark,timer,random) values ('NULL','".$_SESSION['unm']."','".$d."','NULL','NULL','NULL','PENDING','50','5400','YES')");
			$xx=mysql_insert_id();
			echo "<br />";
			echo $xx;
			$q1=mysql_query("select * from ex_data where mark='1' order by rand() limit 5");
			while($r1=mysql_fetch_array($q1))
			{
				echo $r1[0];
				echo $r1[2];
				echo "<br />";
				$qr1=mysql_query("insert into temp_ex_data(tmp_sr_no,srno,ex_que_id,tmp_que_str) values (NULL,'".$xx."','".$r1[0]."','".$r1[2]."')");
			}
			$q2=mysql_query("select * from ex_data where mark='2' order by rand() limit 5");
			while($r2=mysql_fetch_array($q2))
			{
				echo $r2[0];
				echo $r2[2];
				echo "<br />";
				$qr2=mysql_query("insert into temp_ex_data(tmp_sr_no,srno,ex_que_id,tmp_que_str) values (NULL,'".$xx."','".$r2[0]."','".$r2[2]."')");
			}
			$q3=mysql_query("select * from ex_data where mark='3' order by rand() limit 5");
			while($r3=mysql_fetch_array($q3))
			{
				echo $r3[0];
				echo $r3[2];
				echo "<br />";
				$qr3=mysql_query("insert into temp_ex_data(tmp_sr_no,srno,ex_que_id,tmp_que_str) values (NULL,'".$xx."','".$r3[0]."','".$r3[2]."')");
			}
			$q4=mysql_query("select * from ex_data where mark='4' order by rand() limit 5");
			while($r4=mysql_fetch_array($q4))
			{
				echo $r4[0];
				echo $r4[2];
				echo "<br />";
				$qr4=mysql_query("insert into temp_ex_data(tmp_sr_no,srno,ex_que_id,tmp_que_str) values (NULL,'".$xx."','".$r4[0]."','".$r4[2]."')");
			}
			$qry=mysql_query("select tmp_sr_no from temp_ex_data where srno='".$xx."'");
			$qrr=mysql_fetch_array($qry);
			echo $qrr[0];
			echo "<br />";
			$_SESSION['min']=1;
			$_SESSION['max']=20;
			$_SESSION['curr']=$qrr[0];
			$_SESSION['qcount']=1;
			$_SESSION['exid']=$xx;
			$_SESSION['lastmove']=1;
			
			
			
		
			
			
			
			
			
			
			
			header("location:exampage.php");
	}
?>