<?php
include("adminheader.php");
?>
<?php
$sql = "select * from group_master";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{
	if($row[1]==$_GET['gpnm'])
	{
		header("location:crgp.php?sms1=error");	
	}
}
if($_GET['gpnm']==NULL)
{
	header("location:crgp.php?sms1=error");
}

?>
<table class="table table-hover">
    <form action="addmember.php" method="get">
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
    <option value="city">City</option>
    </select></div>
    </td>
    
    <td>
        <div class="input-group" style="padding-right:400px">
       
    <input type="submit" value="GO" class="btn btn-primary" style="width:100px"/>
	</div>
    </td>
    </tr><input type="hidden" name="gpnm" value="<?php echo $_GET['gpnm'];?>" class="btn btn-primary" style="width:100px"/></form></table>
    <br /><br />
    
<form action="creatgrp.php" method="get">
<?php	
extract($_GET);
if(isset($_GET['searchby1']))
{
	$where =  "where $searchby1 like '%".$searchvalue."%'";
 $sql = "select * from user_details ".$where;
 $result1 = mysql_query($sql);
}
else
{
	$sql = "select * from user_details ";
 $result1 = mysql_query($sql);
}
	echo "<table class='table table-hover'><tr><th>Select</th><th>Firstname</th><th>Lastname</th><th>City</th></tr>";
while($row1 = mysql_fetch_array($result1))
{
	$sr=$row1[0];
$srno = $row1[1];
$fnm = $row1[2];
$lnm = $row1[3];
$mobb = $row1[8];
$gen =$row1[9];
$em =$row1[11];
if($srno!=NULL)
{
$up1=strtoupper(substr($row1[1],0,1));
	$lr1=substr($row1[1],1,strlen($row1[1])-1);
	$final1=$up1.$lr1;
	$up2=strtoupper(substr($row1[2],0,1));
	$lr2=substr($row1[2],1,strlen($row1[2])-1);
	$final2=$up2.$lr2;
	$up3=strtoupper(substr($row1[3],0,1));
	$lr3=substr($row1[3],1,strlen($row1[3])-1);
	$final3=$up3.$lr3;
echo "<tr><td><input type='checkbox' name=a[] value='".$sr."'/></td><td>$final1</td><td>$final2</td><td>$mobb</td></tr>";
}
}
	
	
?>
     <input type="hidden" name="gpnm" value="<?php echo $_GET['gpnm'];?>" class="btn btn-primary" style="width:100px"/>
    <td>
        <div class="input-group" style="padding-right:400px">
    <input type="submit" value="Create" class="btn btn-primary" style="width:100px"/>
	</div>
    </td>
   </tr></form></table>
    <br /><br />
   
</div>
</div>
</center>

</body>
</html>