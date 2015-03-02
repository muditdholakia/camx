<?php
session_start();
include("db_connect.php");
mysql_query("delete from admin_exam where serial_no='".$_GET['id']."'");
header("location:admin.php?sxs=yes");
?>