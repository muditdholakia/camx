<?php
include("inhead.php");
?>

<?php
if($r[16]==NULL)
{
echo '<div class="page-header">
  <h1>Feedback <small>Submit Your feeback.</small></h1>
</div>
<form action="fsub.php" method="post">
<textarea class="form-control" rows="5" name="feedback"></textarea>
<br /><br />
<input type="submit" value="Submit Your FeedBack" class="btn btn-primary btn-lg btn-block"/>
</form>';
if(isset($_GET['sms1']))
	{
	echo '<br /><br /><div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>OPPSS!</strong> Something was unusual.</div>';
  
 
	}
}
else
{
	if(isset($_GET['sms']))
	{
	echo '<br /><br /><div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Thank You!</strong> You comments are valuable for us.</div><br /><br /><br />';	
	}
	if(isset($_GET['sms1']))
	{
	echo '<br /><br /><div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>OPPSS!</strong> Something was unusual.</div>';
  
 
	}
	
echo "<center><img src='images/Tuvsud_logo.jpg'></img></center>";
	
}

?>

</div>
</div>
</body>
</html>