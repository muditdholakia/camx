<?php
include("inhead.php");
?>
<script>
    function f2()
	{
	var v1=document.getElementById("fnm").value;
	if(v1.length<=2)
	{
		document.getElementById("fn").innerHTML="MINIMUM 3 CHARACTERS NEEDED";
	}
	else
	{
	document.getElementById("fn").innerHTML="";	
	}
	}
	function f3()
{
	var v2=document.getElementById("lnm").value;
	if(v2.length<=2)
	{
		document.getElementById("ln").innerHTML="MINIMUM 3 CHARACTERS NEEDED";
	}
	else
	{
	document.getElementById("ln").innerHTML="";	
	}
}
function f4()
{
	var v2=document.getElementById("mob").value;
	if(v2.length!=10)
	{
		document.getElementById("mb").innerHTML="MOBILE NUMBER INVALID";
	}
	else
	{
	document.getElementById("mb").innerHTML="";	
	}
}
function f5()
{
	var v2=document.getElementById("addr").value;
	if(v2.length<=7)
	{
		document.getElementById("ad").innerHTML="ADDRESS INVALID";
	
	}
	else
	{
	document.getElementById("ad").innerHTML="";
	
	}
}

    </script>

</head>

<body>
<div class="container">
<div class="page-header">
  <h1>Update <small>Your Details</small></h1>
</div>
<!-- Button trigger modal -->
<center><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  UPDATE DETAILS
</button><br /><br />
<?php
	  if(isset($_GET['smsx']))
	  {
	  echo '<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Updated!</strong> Successfully.
</div>';}
 if(isset($_GET['smsxx']))
	  {
	  echo '<div class="alert alert-danger alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Something!</strong>Missing.
</div>';}
	  ?>
</center>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Hi!! User give update details here..... </h4>
      </div>
      
      <div class="modal-body">
      <form action="loginp5.php" method="post" enctype="multipart/form-data" id="fm">
      
      <span>
<span class="label label-primary" style="float:left">First Name</span><span class="label label-danger" id="fn" style="float:right"></span></span><br />
<div class="input-lg">
  
  <input type="text" class="form-control" name="fnm" id="fnm" onchange="f2()" value="<?php echo $_SESSION['f1'];?>" />
</div>

<br />      <span>
<span class="label label-primary" style="float:left">Last Name</span><span class="label label-danger" id="ln" style="float:right"></span></span><br/>

<div class="input-lg">
  
  <input type="text" class="form-control" name="lnm" id="lnm" onchange="f3()" value="<?php echo $_SESSION['f2'];?>"/>
</div>
<br /><span class="label label-primary">Gender</span><br /><br />
<div class="input-lg">
    <select class="form-control" name="gender"><option value="male">Male</option><option value="female">Female</option></select>
  </div>
  <br /><span class="label label-primary">BirthDate</span><br />
  <div class="input-lg">
<input type="date" class="form-control" name="date" />
   </div>
<br /><span class="label label-primary">City</span><br />
  <div class="input-lg">
<select class="form-control" name="city">
<?php 
include("db_connect.php");
$u=mysql_query("SELECT ct_name FROM city");
while($row = mysql_fetch_array($u))
{
echo '<option value="'.$row[0].'">'.$row[0].'</option>';
}
?>
</select>
</div>
</br><span>
<span class="label label-primary" style="float:left">Mobile Number</span><span class="label label-danger" id="mb" style="float:right"></span></span></br>
<div class="input-lg">
<input type='tel' pattern="[0-9]{10,10}" class="form-control search" name="mob" autocomplete="off" maxlength="10" id="mob" required onchange="f4()" value="<?php echo $r[12];?>"/>
</div>
</br>
<span>
<span class="label label-primary" style="float:left">Address</span><span class="label label-danger" id="ad" style="float:right"></span></span></br>
<div class="input-lg">
<input type="text" class="form-control" name="addr" id="addr" onchange="f5()" value="<?php echo $r[13];?>"/>
</div></br>
<span class="label label-primary">Profile Picture</span></br>
<div class="input-lg">
<input type="file" id="exampleInputFile" name="file"/>
</div>
<input type="hidden" value="<?php echo $_SESSION['unm'];?>" name="unm"/>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Save changes" />
      </div>
</form>
     
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
</body>
</html>