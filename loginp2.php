<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">

<?php
if(isset($_GET['sms']))
{
echo '<div class="page-header">
  <h1>Just few hours<small>Then it all yours.</small></h1>
</div><div class="alert alert-info alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>CONGRATULATIONS!</strong>Your details has been uploaded successfully.In next <strong>48</strong> hours verification will be done.
  </br><strong>Regards!Team CAMX.</strong> 
</div>';	


}
if(isset($_GET['sms1']))
{
echo '<div class="page-header">
  <h1>Verification<small>Authenticating your document and details.</small></h1>
</div><div class="alert alert-info alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>CONGRATULATIONS!</strong>Your details are under verification.</br>We will redirect you soon.
  </br><strong>Regards!Team CAMX.</strong> 
</div>';	


}
echo '<center></br></br>
<a href="home.php" class="btn btn-primary btn-lg active" role="button">GO TO HOME PAGE.</a>
</center>';
?>


</div>
</body>
</html>