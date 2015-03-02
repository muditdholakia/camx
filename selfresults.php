<?php
include("inhead.php");
?>
<br /><br />
<table class="table table-hover">
<th>Exam Date</th><th>Attempted Question</th><th>Discarded Question</th><th>Marks Obtained</th><th>Total Marks</th><th>Status</th><th>Detailed Analysis</th>
<?php
$sqr="select * from ex_record where u_id='".$_SESSION['unm']."'";
$res=mysql_query($sqr);
while($r=mysql_fetch_array($res))
{
	if($r[6]=="COMPLETED")
	{
	echo "<tr><td>$r[2]</td><td>$r[3]</td><td>$r[4]</td><td>$r[5]</td><td>$r[7]</td><td>$r[6]</td><td><a href='graph.php?exid=$r[0]'>Graph Analysis</a></td></tr>";
	}
	if($r[6]=="PENDING")
	{
	echo "<tr><td>$r[2]</td><td>$r[3]</td><td>$r[4]</td><td>$r[5]</td><td>$r[7]</td><td><a href='pendingon.php?exno=$r[0]'>$r[6]</a></td><td>Graph Analysis</td></tr>";
	}
}
?></table>
</body>
</html>