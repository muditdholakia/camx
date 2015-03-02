<?php
include("adminheader.php");
?><br  /><br />
<div class="jumbotron">
  <h1>Hello, Admin!</h1>
  <p>Go through the exciting  application using menues.The training is provided to you and also effective interface of CAMX will guide you for administrative tasks THANK YOU!.<ul><li>1.Exam Management</li><li>2.User Management</li><li>3.Question Management.</li></ul></p>
  
</div>
<?php
if(isset($_GET['sms1']))
{
echo '<div class="alert alert-info alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>CONGRATULATIONS!</strong>Exam Created.
</div>';	
}
?>
<?php
if(isset($_GET['sxs']))
{
echo '<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>DONE!</strong>Exam Deleted.
</div>';	
}
?>
</div>
</body>
</html>