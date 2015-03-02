<?php
include("adminheader.php");
?>
<br /><br />
<div class="jumbotron">
  <h1>GENERATE EXAM</h1>
  <div class="input-group" style="width:300px">
<form action="crt2.php" method="get" enctype="multipart/form-data">

<input type="hidden" class="form-control" placeholder="Question String" name="tmm" value="<?php echo $_GET['tm']; ?>" />
<lable>:Marks:</lable><br /><br />
<?php
if($_GET['tm']=="100")
{
echo '<div class="input-group">   
    <select class="form-control" style="width:300px" name="im">
	<option value="1">1</option>
	<option value="2">2</option>
    <option value="4">4</option>
	</select></div><br /><br />';
}
if($_GET['tm']=="50")
{
echo '<div class="input-group">   
    <select class="form-control" style="width:300px" name="im">
	<option value="1">1</option>
	<option value="2">2</option>
	</select></div><br />';
}

?>
    <input type="submit" class="btn btn-primary" value="Next"/>
</form>
</div>
</center>
</body>
</html>

</div>
</div>
</body>
</html>