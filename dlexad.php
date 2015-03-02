<?php
include("adminheader.php");
?>
<br /><br />
<table class='table table-hover'><tr><th>EXAM</th><th>DELETE</th></tr>
<?php
	$x=0;
	$sql = "select * from admin_exam";
	$result = mysql_query($sql);
	while($rx=mysql_fetch_array($result))
	{
			echo "<tr><td>".$rx[5]."</td><td><a href='dladex1.php?id=".$rx[0]."'>DELETE</td></tr>";
	}
?>
</table>
</div>
</div>
</body>
</html>