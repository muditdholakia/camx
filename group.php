<?php
include("adminheader.php");
?>
<div class="jumbotron">
  <h1>GROUP</h1>
  <p>Create a new group.</p>
  <p><a class="btn btn-primary btn-lg" role="button" href="crgp.php">Create Group</a></p>
  <p>Visit existing groups.</p>
  <p><a class="btn btn-primary btn-lg" role="button" href="dlgp.php">Visit Groups</a></p>
 
</div>
 <?php
if(isset($_GET['sms1']))
{
echo '<div class="alert alert-info alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>CONGRATULATIONS!</strong>Group Created.
</div>';	
}
?>
 <?php
if(isset($_GET['sms2']))
{
echo '<div class="alert alert-info alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Group has been removed!</strong>
</div>';	
}
?>
 <?php
if(isset($_GET['sms3']))
{
echo '<div class="alert alert-info alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>CONGRATULATIONS!</strong>Group Edited.
</div>';	
}
?>
</div>
</body>
</html>