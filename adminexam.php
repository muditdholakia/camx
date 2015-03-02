<?php
include("inhead.php");
?>
<br /><br /><table class='table table-hover'><tr><th>Exam </th><th>Go for test!</th></tr>
<?php
	$x=0;
	$ct=0;
	$sql = "select * from admin_exam";
	$result = mysql_query($sql);
	while($rx=mysql_fetch_array($result))
	{
		$chkg=explode(",",$rx[4]);
		$i=0;
		while(isset($chkg[$i]))
		{
			if($chkg[$i]==$r[0])
			{
			echo "<tr><td>".$rx[5]."</td><td><a href='cradex1.php?total=".$rx[1]."&gid=".$rx[2]."&im=".$rx[3]."&id=".$rx[0]."'>GO</td></tr>";		
			$ct=$ct+1;
			}
			$i=$i+1;
		}
	}
?>
</table>
<?php
if($ct==0)
{
echo '<div class="alert alert-info alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>OPPSS!</strong> No exams available rightnow.
</div>';	
}

?>
</div>
</div>
</body>
</html>