<?php
session_start();
include("db_connect.php");
mysql_query("update temp_ex_data set marked_view='yes' where tmp_sr_no='".$_SESSION['curr']."'");
header("location:exampage.php");
?>