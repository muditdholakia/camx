<?php
session_start();
echo $_SESSION['exid'];
include("db_connect.php");
extract($_POST);
$totalmarks=0;
$attempt=0;
$discard=0;
if(isset($a))
{
		mysql_query("update temp_ex_data set tmp_ans='".$a."' where tmp_sr_no='".$_SESSION['curr']."'");
}
if(isset($b))
{
		mysql_query("update temp_ex_data set tmp_ans='".$b."' where tmp_sr_no='".$_SESSION['curr']."'");
}
if(isset($c))
{
		mysql_query("update temp_ex_data set tmp_ans='".$c."' where tmp_sr_no='".$_SESSION['curr']."'");
}
if(isset($d))
{
		mysql_query("update temp_ex_data set tmp_ans='".$d."' where tmp_sr_no='".$_SESSION['curr']."'");
}
if((!isset($a)) && (!isset($b)) && (!isset($c)) && (!isset($d)))
{
		mysql_query("update temp_ex_data set temp_ans='' where tmp_sr_no='".$_SESSION['curr']."'");
}

$fr_exst=mysql_query("select * from temp_ex_data where srno='".$_SESSION['exid']."'");
while($r=mysql_fetch_array($fr_exst))
{
						$fr_std=mysql_query("select * from ex_data where srno='".$r[2]."'");
						$rx=mysql_fetch_array($fr_std);
						if($r[4]=='')
						{
								$totalmarks=$totalmarks;				
								$discard=$discard+1;
						}
						if($r[4]!='')
						{
							if($r[4]==$rx[7])
							{
								$totalmarks=$totalmarks+$rx[8];
								$attempt=$attempt+1;
							}
							if($r[4]!=$rx[7])
							{
								$totalmarks=$totalmarks;
								$attempt=$attempt+1;
							}
						}
}
printf($attempt);
echo "<br />";
printf($totalmarks);
echo "<br />";
printf($_SESSION['exid']);

mysql_query("update ex_record set attempt_que='".$attempt."',discard_que='".$discard."',marks_obtained='".$totalmarks."',ex_status='COMPLETED' where ex_id='".$_SESSION['exid']."'");
mysql_query("delete from temp_ex_data where srno='".$_SESSION['exid']."'");
unset($_SESSION['exid']);
unset($_SESSION['ts']);
unset($_SESSION['min']);
unset($_SESSION['max']);
unset($_SESSION['curr']);
unset($_SESSION['qcount']);
unset($_SESSION['exid']);
unset($_SESSION['lastmove']);

header("location:student.php?exsms=COMPLETED SUCCESSFULLY");
?>