<?php
include("adminheader.php");
?>

<br /><center>
<div class="jumbotron" style="width:500px"><h1>Insert User</h1>
<div class="input-group" style="width:300px">
<form action="creatuser.php" method="get">
<input type="text" class="form-control" placeholder="Username" name="unm" id="un"/>
<br /><span class="label label-danger" id="un1" style="float:right"><?php if(isset($_GET['unm'])){
if(strlen($_GET['unm'])<6){echo "Invalid user details";}}
?></span><br />
<input type="password" class="form-control" placeholder="Password" name="pwd" id="pw"/>
<br /><span class="label label-danger" id="pw1" style="float:right" ><?php if(isset($_GET['pwd'])){
if(strlen($_GET['pwd'])<6){echo "Invalid user details";}}
?></span><br />
<input type="submit" class="btn btn-primary" value="INSERT"/>

</form>
</div>
</center>
</body>
</html>

<?php
if(isset($_GET['unm']) || isset($_GET['pwd']))
{									  
if(strlen($_GET['unm'])>=6 && strlen($_GET['pwd'])>=6)
{
	$cnt=0;
	$sq= "select * from user_details WHERE u_nm='".$_GET['unm']."'";
	$re=mysql_query($sq);
	while($r2=mysql_fetch_array($re)){$cnt=$cnt+1;}
if($cnt==0)
{
	$sql1="INSERT INTO user_details(u_id,u_nm,password,user_valid,u_type) VALUES (NULL,'".$_GET['unm']."','".$_GET['pwd']."','YES','student')";

mysql_query($sql1);
echo  '<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Success!</strong> User Inserted.
</div>';
}else {echo  '<div class="alert alert-danger alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Warning!</strong> Username is already taken.
</div>';}}
}
?>