<?php
include("adminheader.php");
?>
<?php
$sql1 = "select * from group_master where group_id=".$_GET['grno'];
$result1 = mysql_query($sql1);
$row1 = mysql_fetch_array($result1);
$arrr=explode(",",$row1[2]);
?>
<table class="table table-hover">
    <form action="addmember2.php" method="get">
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
    </tr><input type="hidden" name="gpnm" value="<?php echo $_GET['grno'];?>" class="btn btn-primary" style="width:100px"/></form></table>
    <br /><br />
<form action="creatgrpedit.php" method="get">
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
while($row = mysql_fetch_array($result1))
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
	$i=0;$pr=0;
while(isset($arrr[$i]))
{
	if($arrr[$i]==$row[0])
	{
	echo "<tr><td>ALREADY A MEMBER!</td><td>$final1</td><td>$final2</td><td>$mobb</td></tr>";
	$pr=$pr+1;
	}
	$i=$i+1;
}
if($pr==0)
{
echo "<tr><td><input type='checkbox' name=b[] value='".$sr."'/></td><td>$final1</td><td>$final2</td><td>$mobb</td></tr>";	
}
}
}
	
	
	
?>
     
    <td>
        <div class="input-group" style="padding-right:400px">
    <input type="submit" value="Create" class="btn btn-primary" style="width:100px"/>
	</div>
    </td> <input type="hidden" name="gpnm" value="<?php echo $_GET['grno'];?>" class="btn btn-primary" style="width:100px"/>
   </tr></form></table>
    <br /><br />
   
</div>
</div>
</center>

</body>
</html>