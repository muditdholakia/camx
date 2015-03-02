<?php
include("adminheader.php");
?>
<div class="jumbotron">
<h1>Group Name</h1>
<p>Insert Name</p>
<form action="addmember.php" method="get" enctype="multipart/form-data">
<input type="text" class="form-control" placeholder="Group Name" name="gpnm" /><br /><br />
<input type="submit" class="btn btn-primary" value="Next"/>
</form>
</div>
<?php
	  if(isset($_GET['sms1']))
	  {
	  echo '<div class="alert alert-warning alert-danger">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Warning!</strong> Group Name is invalid.
</div>';}
?>
</div>
</center>
</body>
</html>

