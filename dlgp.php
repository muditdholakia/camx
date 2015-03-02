<?php
include("adminheader.php");
?>
<table class='table table-hover'><tr><th>View Group Details</th><th>Remove</th></tr>
<?php
	$sql = "select * from group_master";
	$result = mysql_query($sql);
	while($rx=mysql_fetch_array($result))
	echo "<tr><td><a href='dlgp3.php?srno=".$rx[0]."'>$rx[1]</a></td><td><a href='dlgp2.php?srno=".$rx[0]."'>Delete Group</a></td></tr>";
?>
<?php
if(isset($_GET['sms3']))
{
echo '<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>User!</strong> Removed.
</div>
';	
}
?>
</table>
</div>
</body>
</html>