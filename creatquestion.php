<?php
include("adminheader.php");
?>
<br /><center>
<div class="jumbotron" style="width:500px"><h1>Insert Question</h1>
<div class="input-group" style="width:300px">
<form action="creatquestion.php" method="post" enctype="multipart/form-data">
<input type="text" class="form-control" placeholder="Question String" name="qstr" />
<br /><span class="label label-danger" id="un1" style="float:right"><?php if(isset($_POST['qstr'])){
if(strlen($_POST['qstr'])<6){echo "Invalid Question String";}}
?></span><br />
<input type="text" class="form-control" placeholder="Answer 1" name="a1" />
<br /><span class="label label-danger" id="un1" style="float:right"><?php if(isset($_POST['a1'])){
if(strlen($_POST['a1'])<6){echo "Invalid Answer details";}}
?></span><br />

<input type="text" class="form-control" placeholder="Answer 2" name="a2"/>
<br /><span class="label label-danger" id="un1" style="float:right"><?php if(isset($_POST['a2'])){
if(strlen($_POST['a2'])<6){echo "Invalid Answer details";}}
?></span><br />

<input type="text" class="form-control" placeholder="Answer 3" name="a3" />
<br /><span class="label label-danger" id="un1" style="float:right"><?php if(isset($_POST['a3'])){
if(strlen($_POST['a3'])<6){echo "Invalid Answer details";}}
?></span><br />

<input type="text" class="form-control" placeholder="Answer 4" name="a4" />
<br /><span class="label label-danger" id="un1" style="float:right"><?php if(isset($_POST['a4'])){
if(strlen($_POST['a4'])<6){echo "Invalid Answer details";}}
?></span><br />
<lable>:Correct Answer:</lable>
<div class="input-group">   
    <select class="form-control" style="width:300px" name="cans">
	<option value="a" >A</option>
	<option value="b" >B</option>
	<option value="c" >C</option>
	<option value="d" >D</option>
    </select></div>
     <lable>:Subject:</lable>
<div class="input-group">   
    <select class="form-control" style="width:300px" name="sub">
	<?php
	$i=1;
	$sqq="select * from sub_master";
	$ress=mysql_query($sqq);
	while($r11=mysql_fetch_array($ress))
	{
    echo "<option value='".$r11[0]."'>".$r11[1]."</option>";
	}
	?>
	</select></div>
    <lable>:Weight:</lable>
<div class="input-group">   
    <select class="form-control" style="width:300px" name="weight">
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
    </select></div>
       <lable>:Difficulty Level:</lable>
<div class="input-group">   
    <select class="form-control" style="width:300px" name="dl">
	<option value="1.1">1.1</option>
	<option value="1.2">1.2</option>
	<option value="1.3">1.3</option>
	<option value="1.4">1.4</option>
    </select></div>
    <br />
    <span class="label label-primary">Question Picture(*)</span></br>
<div class="input-lg">
<input type="file" id="exampleInputFile" name="file"/>
</div>

<input type="submit" class="btn btn-primary" value="INSERT"/><br />
*question image is optional.
</form>
</div>
</center>
</body>
</html>

<?php
if(isset($_POST['qstr']) || isset($_POST['a1']) || isset($_POST['a2'])|| isset($_POST['a3']) || isset($_POST['a4']))
{									  
if(strlen($_POST['qstr'])>=6 && strlen($_POST['a1'])>=6 && strlen($_POST['a2'])>=6 && strlen($_POST['a3'])>=6 && strlen($_POST['a4'])>=6)
{
	$cnt=0;
	$sq= "select * from ex_data WHERE q_str='".$_POST['qstr']."'";
	$re=mysql_query($sq);
	while($r2=mysql_fetch_array($re)){$cnt=$cnt+1;}
if($cnt==0)
{
	
	
	

	
	
	
	
	
$sql1="INSERT INTO ex_data(srno,sub_id,q_str,A_1,A_2,A_3,A_4,c_ans,mark,d_l) VALUES (NULL,'".$_POST['sub']."','".$_POST['qstr']."','".$_POST['a1']."','".$_POST['a2']."','".$_POST['a3']."','".$_POST['a3']."','".$_POST['cans']."','".$_POST['weight']."','".$_POST['dl']."')";

mysql_query($sql1);
if($_FILES["file"]["name"]!=NULL)
{
$xx=mysql_insert_id();
extract($_POST);


$allowedExts = array("gif", "jpeg", "jpg", "png");
$fname = $_FILES["file"]["name"];
$ext = explode(".", $fname);
$extension = $ext[1];

if (
	(
	 ($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 200000000)
&& in_array($extension, $allowedExts)
)
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
  

   		$_FILES["file"]["name"]="$xx"."."."$ext[1]";
      move_uploaded_file($_FILES["file"]["tmp_name"],"images/q_imgs/". $_FILES["file"]["name"]);
      
	  $store="images/q_imgs/" . $_FILES["file"]["name"];
     
    }
  }
else
  {
  echo "Invalid file";
  }

$sql="UPDATE ex_data SET qim_path='".$store."' WHERE srno='".$xx."'";
mysql_query($sql);
}
echo  '<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Success!</strong> Question Inserted.
</div>';
}else {echo  '<div class="alert alert-danger alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>Warning!</strong> Question already exists.
</div>';}}
}
?>