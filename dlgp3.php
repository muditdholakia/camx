<?php
include("adminheader.php");
?>

<div class="jumbotron">
  <h1>Add members.</h1>
  <p>Add more members to group.</p>
  <p><a class="btn btn-primary btn-lg" role="button" href="addmem2.php?grno=<?php echo $_GET['srno'];?>">Add more members</a></p> 
</div>
<?php

echo "<br /><br /><table class='table table-hover'><tr><th>Firstname</th><th>Lastname</th><th>Remove From Group</th></tr>";
	$i=0;
	$sql1 = "select * from group_master where group_id=".$_GET['srno'];
	$result1 = mysql_query($sql1);
	$row1 = mysql_fetch_array($result1);
	$mem=explode(",",$row1[2]);
	while(isset($mem[$i]))
	{
			
		$sql = "select * from user_details where u_id=".$mem[$i];
	$result = mysql_query($sql);
	
while($row = mysql_fetch_array($result))
{
	$sr=$row[0];
$srno = $row[1];
$fnm = $row[2];
$lnm = $row[3];
$mobb = $row[8];
$gen =$row[9];
$em =$row[11];
if($srno!=NULL)
{
$up1=strtoupper(substr($row[1],0,1));
	$lr1=substr($row[1],1,strlen($row[1])-1);
	$final1=$up1.$lr1;
	$up2=strtoupper(substr($row[2],0,1));
	$lr2=substr($row[2],1,strlen($row[2])-1);
	$final2=$up2.$lr2;
	$up3=strtoupper(substr($row[3],0,1));
	$lr3=substr($row[3],1,strlen($row[3])-1);
	$final3=$up3.$lr3;
echo "<tr></td><td>$final1</td><td>$final2</td><td><a href='dlgp4.php?srno=".$row[0]."&grno=".$_GET['srno']."'>Remove Member</a></td></tr>";
}
$i=$i+1;
}
}
?>
</table>   
</div>
</div>
</center>
</div>
</body>
</html>