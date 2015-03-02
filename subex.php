<?php
include("inhead.php");
?>
<br /><br />
<center>
<div class="jumbotron" style="width:500px"><h3>Give your own test</h3>
<div class="input-group" style="width:300px">
<form action="excr1.php" method="get" enctype="multipart/form-data">

<lable>:Marks:</lable>
<div class="input-group">   
    <select class="form-control" style="width:300px" name="mrk">
	<option value="50" >50</option>
	<option value="100" >100</option>
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
    
       <lable>:Difficulty Level:</lable>
<div class="input-group">   
    <select class="form-control" style="width:300px" name="dl">
	<option value="1.1">Easy</option>
	<option value="1.2">Moderate</option>
	<option value="1.3">Difficult</option>
	<option value="1.4">Extremely Difficult</option>
    </select></div>
    <br />
    

<input type="submit" class="btn btn-primary" value="GO"/>

</form>
</div>
</center>

</div>
</div>
</body>
</html>