<?php
include("adminheader.php");
?>
<?php
	$sql = "delete from group_master where group_id=".$_GET['srno'];
	$result = mysql_query($sql);
	header("location:group.php?sms2=success");
?>

</div>
</body>
</html>