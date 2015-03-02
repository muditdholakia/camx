<?php
include("adminheader.php");
?>

<br /><?php if(isset($_GET['sms']) && $_GET['sms']=="success"){echo '<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Success!</strong> Subject Added.
</div>';}else if(isset($_GET['sms']) && $_GET['sms']=="alert"){echo '<div class="alert alert-danger alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Warning!</strong> Better check yourself,Subject is invalid.
</div>';}?><br />
<table class="table table-hover">
<div class="page-header">
  <h1>System includes these subjects. <small>You can not delete them.</small></h1>
</div>
<th>Subject Id</th><th>Subject Name</th>
<?php
include("db_connect.php");

$sqr="select * from sub_master";
$res=mysql_query($sqr);
while($r=mysql_fetch_array($res))
{
	echo "<tr><td>$r[0]</td><td>$r[1]</td></tr>";
}
?></table>
<div class="page-header">
  <h1>Insert Subjects.<small>Add new subject.</small></h1>
</div>

<form role="form" action="addsub.php" method="get">
  <div class="form-group">
<div class="input-group input-group-lg">
  <span class="input-group-addon">Add New Subject</span>
  <input type="text" class="form-control" placeholder="Subject Name" name="sub">
</div>  
<br /><center><input type="submit" class="btn btn-default btn-lg" value="ADD"/></center>
  </div>
</body>
</html>