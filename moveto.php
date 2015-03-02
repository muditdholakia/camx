<?php
session_start();
echo $_GET['move']."<br />";
echo $_SESSION['lastmove']."<br />";
$_SESSION['curr']=$_SESSION['curr']-$_SESSION['lastmove']+($_GET['move']);
$_SESSION['qcount']=$_GET['move'];
echo $_SESSION['curr']."<br />";
echo $_SESSION['qcount']."<br />";
$_SESSION['lastmove']=$_GET['move'];
echo $_SESSION['lastmove'];
header("location:exampage.php");

?>