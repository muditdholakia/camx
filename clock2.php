<?php
session_start();
include("db_connect.php");
$uptm=0;
$sq="SELECT * FROM ex_record where ex_id='".$_SESSION['exid']."'";
$res=mysql_query($sq);
$r=mysql_fetch_array($res);
$uptm=$r[8]-60;
mysql_query("update ex_record set timer='".$uptm."' where ex_id='".$_SESSION['exid']."'");
header("location:exampage.php");
?>