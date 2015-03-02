<?php
include("inhead.php");
?>
<div class="page-header">
  <h1>Graph Analysis <small>An extrovert CAMX feature.</small></h1>
</div>
<?php
$sqr="select * from ex_record where u_id='".$_SESSION['unm']."' and ex_id='".$_GET['exid']."'";
$res=mysql_query($sqr);
$r=mysql_fetch_array($res);
$at;
$dis;
$per;
if($r[7]=="50")
{
	$at=($r[3]/($r[3]+$r[4]))*100;
	$dis=($r[4]/($r[3]+$r[4]))*100;
	$per=ceil(($r[5]/50)*100);
}
if($r[7]=="100")
{
	$at=($r[3]/($r[3]+$r[4]))*100;
	$dis=($r[4]/($r[3]+$r[4]))*100;
	$per=ceil(($r[5]/100)*100);
}

?>
<h3>Graph 1<span class="label label-default">Attempted:<?php echo $at;echo "%";?></span></h3>
<div class="progress progress-striped">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $at;?>%">
    <span class="sr-only"><?php echo $at;?>% Complete (success)</span>
  </div>
</div>
<h3>Graph 2<span class="label label-default">Discarded:<?php echo $dis;echo "%";?></span></h3>
<div class="progress progress-striped">
  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $dis;?>%">
    <span class="sr-only"><?php echo $dis;?>% Complete</span>
  </div>
</div>
<h3>Graph 3<span class="label label-default">Percentage:<?php echo $per;echo "%";?></span></h3>
<div class="progress progress-striped">
  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $per;?>%">
    <span class="sr-only"><?php echo $per;?>% Complete (warning)</span>
  </div>
</div>

</div>
</body>
</html>