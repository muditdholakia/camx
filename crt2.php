<?php
include("adminheader.php");
?>

<div class="jumbotron">
  <h1>GENERATE EXAM</h1>
  <div class="input-group" style="width:300px">
<form action="crt3.php" method="get" enctype="multipart/form-data">

<input type="hidden" class="form-control" placeholder="Question String" name="tmm" value="<?php echo $_GET['tmm']; ?>" />
<input type="hidden" class="form-control" placeholder="Question String" name="im" value="<?php echo $_GET['im']; ?>" />
<lable>:Group:</lable><br />
<div class="input-group">   
    <select class="form-control" style="width:300px" name="gpnm">
<?php
$sql = "select * from group_master";
	$result = mysql_query($sql);
	while($rx=mysql_fetch_array($result))
	{
		echo "<option value=".$rx[0].">".$rx[1]."</option>";	
	}

?><option value="ALL">ALL</option>
</select></div><br />
<lable>:Exam Name:</lable><br />
<input type="text" class="form-control" name="enm" />
<br />
<input type="submit" class="btn btn-primary" value="Next"/>
</form>

</div>
</div>
</center>
<?php
	  if(isset($_GET['sm']))
	  {
	  echo '<div class="alert alert-warning alert-danger">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Group Name!</strong>must be proper(LENGTH OF NAME MUST BE AT LEAST 3 CHARACTERS) .
</div>';}?>
</body>
</html>
