<?php
include("adminheader.php");
?>
<table class="table table-hover">
    <form action="managequestion.php" method="post">
    <tr>
    <td>
    
    <div class="input-group">
      <input type="text" name="searchvalue" class="form-control" style="width:200px" placeholder="Search" />
    </div>

	
	</td>
    <td>
    
    <div class="input-group">   
    <select name="searchby1" class="form-control" style="width:300px">
	<option value="sub_id">Subject</option>
	<option value="A_1">Answer 1</option>
	<option value="A_2">Answer 2</option>
	<option value="A_3">Answer 3</option>
	<option value="A_4">Answer 4</option>
    <option value="c_ans">Correct Answer</option>
    <option value="mark">Marks</option>
    <option value="d_l">Difficulty Level</option>
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
 $sql = "select * from ex_data ".$where;
	$result = mysql_query($sql);
	echo "<table class='table table-hover ' ><tr><th>Subject ID</th><th>Question String</th><th>Answer 1</th><th>Answer 2</th><th>Answer 3</th><th>Answer 4</th><th>Correct Answer</th><th>Weight</th><th>Difficulty Level</th><th>Question Image</th><th>View Details</th><th>Remove</th></tr>";
while($row = mysql_fetch_array($result))
{
	$sr=$row[0];
$srno = $row[1];
$fnm = $row[2];
$lnm = $row[3];
$mobb = $row[4];
$gen =$row[5];
$em =$row[6];
$em1=$row[7];
$em2=$row[8];
$em3=$row[9];
if($row[10]==NULL)
{
$em4="default/no-image"	;
}
else
{
$em4=$row[10];	
}

echo "<tr><td>$srno</td><td>$fnm</td><td>$lnm</td><td>$mobb</td><td>$gen</td><td>$em</td><td>$em1</td><td>$em2</td><td>$em3</td><td>$em4</td><td><a href='viewdetailsque.php?srno=".$sr."'>View Details</a></td><td><a href='managequestion.php?srno=".$sr."'>Delete Question</a></td></tr>";
}
	echo "</table>";
	}
	
	?>
    <?php
	if(isset($_GET['srno']))
	{
	$sq2="SELECT * FROM ex_data where srno='".$_GET['srno']."'";
	$res2=mysql_query($sq2);
	$r2=mysql_fetch_array($res2);
	if($r2[10]!=NULL)
	{
		unlink($r2[10]);
	}
	$sql = "delete from ex_data where srno=".$_GET['srno'];
    	mysql_query($sql);
		echo  '<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Success!</strong> Question Deleted.
</div>';
	}
	?>
</div>
<body>
</body>
</html>