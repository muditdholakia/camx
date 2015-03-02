<?php

include("adminheader.php");
?>

<table class="table table-hover">
    <form action="manageuser.php" method="post">
    <tr>
    <td>
    
    <div class="input-group">
      <input type="text" name="searchvalue" class="form-control" style="width:200px" placeholder="Search" />
    </div>

	
	</td>
    <td>
    
    <div class="input-group">   
    <select name="searchby1" class="form-control" style="width:300px">
	<option value="f_nm">First Name</option>
	<option value="l_nm">Last Name</option>
	<option value="gender">Gender</option>
	<option value="u_type">User Type</option>
	<option value="vf_flag2">Verification Status</option>
    <option value="city">City</option>
    </select></div>
    </td>
    
    <td>
        <div class="input-group" style="padding-right:400px">
    <input type="submit" value="GO" class="btn btn-primary" style="width:100px"/>
	</div>
    </td>
    </tr></form></table>
    <br /><br />
    
    <?php
	extract($_POST);
	if(isset($_POST['searchby1']))
	{
	$where =  "where $searchby1 like '%".$searchvalue."%'";
 $sql = "select * from user_details ".$where;
	$result = mysql_query($sql);
	echo "<table class='table table-hover'><tr><th>Firstname</th><th>Lastname</th><th>Gender</th><th>City</th><th>User Type</th><th>Verification Done?</th><th>Details</th><th>Remove</th></tr>";
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
echo "<tr><td>$final1</td><td>$final2</td><td>$final3</td><td>$mobb</td><td>$gen</td><td>$em</td><td><a href='viewdetails.php?srno=".$sr."'>View Details</a></td><td><a href='manageuser.php?srno=".$sr."'>Delete User</a></td></tr>";
}
}
	echo "</table>";
	}
	
	?>
    <?php
	if(isset($_GET['srno']))
	{
	$sq2="SELECT * FROM user_details where u_id='".$_GET['srno']."'";
$res2=mysql_query($sq2);
$r2=mysql_fetch_array($res2);
if(isset($r2[14])&& isset($r2[14]))
{
unlink($r2[14]);unlink($r2[15]);
}
$sql = "delete from user_details where u_id=".$_GET['srno'];
    mysql_query($sql);
	echo '<div class="alert alert-success">USER DELETED! Successfully.</div>';
	}
	?>
</div>
</body>
</html>