<?php
if(!isset($_GET['unm']) || !isset($_GET['psw']))
{
	header("location:error.php");	
}
?>
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
<div class="alert alert-warning alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>OPPSS!</strong> First Upload the document for verification in (.pdf) format.
</div>
<center>
<form action="updoc.php" method="post" enctype="multipart/form-data">
<input type="hidden" value="<?php echo $_GET['unm'];?>" name="unm"/>
<input type="hidden" value="<?php echo $_GET['psw'];?>" name="psw"/>
<input type="file" id="exampleInputFile" name="file" />
</br></br>
<input type="submit" value="SUBMIT" class="btn btn-primary btn-lg"   />
</form>
</center>
</div>
</body>
</html>