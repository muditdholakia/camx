<?php
session_start();
include_once("db_connect.php");
?>
<?php
	if(isset($_SESSION['exid']))
	{
		
		if(isset($_SESSION['curr']))
		{
		$cr=$_SESSION['curr'];
		$qr=mysql_query("select * from temp_ex_data where tmp_sr_no='".$cr."'");
		$re=mysql_fetch_array($qr);
		$hhhh=$re[2];
		$qry=mysql_query("select * from ex_data where srno='".$hhhh."'");
		$rj=mysql_fetch_array($qry);
		}
	}
?>
    <?php 
	$timestamp = time();
	$q1=mysql_query("select * from ex_record where ex_id='".$_SESSION['exid']."'");
$qrr1=mysql_fetch_array($q1);
$diff =$qrr1[8]; //<-Time of countdown in seconds.  ie. 3600 = 1 hr. or 86400 = 1 day.

//MODIFICATION BELOW THIS LINE IS NOT REQUIRED.
$hld_diff = $diff;
if(isset($_SESSION['ts'])) {
	$slice = ($timestamp - $_SESSION['ts']);	
	$diff = $diff - $slice;
}

if(!isset($_SESSION['ts']) || $diff > $hld_diff || $diff < 0) {
	$diff = $hld_diff;
	$_SESSION['ts'] = $timestamp;
}

//Below is demonstration of output.  Seconds could be passed to Javascript.
$diff; //$diff holds seconds less than 3600 (1 hour);

$hours = floor($diff / 3600) . ' : ';
$diff = $diff % 3600;
$minutes = floor($diff / 60) . ' : ';
$diff = $diff % 60;
$seconds = $diff;


?>
   
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  <center> <h1> <span class="label label-primary" id="strclock"></span></h1> </center> 
  
 <div id="strclock"></div>
<script type="text/javascript">
 var hour = <?php echo floor($hours); ?>;
 var min = <?php echo floor($minutes); ?>;
 var sec = <?php echo floor($seconds); ?>

function countdown() {
 if(sec <= 0 && min > 0) {
 
 sec = 59;
  min -= 1;
  
 }

 else if(min <= 0 && sec <= 0) {
  min = 0;
  sec = 0;
    
  
 }
 else if(min==0 && sec==0)
 {
	window.location.assign("exsubmit.php"); 
 }
 else {
  sec -= 1;
 }
 
 if(min <= 0 && hour > 0) {
  min = 59;
  hour -= 1;
 }
 
 var pat = /^[0-9]{1}$/;
 sec = (pat.test(sec) == true) ? '0'+sec : sec;
 min = (pat.test(min) == true) ? '0'+min : min;
 hour = (pat.test(hour) == true) ? '0'+hour : hour;
 
 document.getElementById('strclock').innerHTML = hour+":"+min+":"+sec;
 
 setTimeout("countdown()",1000);
 }
 countdown();
</script>
</head>

<body>

<div class="container">
<ul class="pagination">
  <?php
  $i;
  $id=1;
  $active="active";
  for($i=1;$i<=$_SESSION['max'];$i++)
  {
	  if($i==$_SESSION['qcount'])
	  {
  echo "<li class='active'><a href=moveto.php?move=".$i.">".$i." <span class='sr-only'>(current)</span></a></li>";
	  }
	  else
	  {
  echo "<li class=''><a href=moveto.php?move=".$i.">".$i." <span class='sr-only'>(current)</span></a></li>";
	  }
  }
  echo "<br /><br /><table><tr><br /><br />";
  
  $qrx=mysql_query("select * from temp_ex_data where srno='".$_SESSION['exid']."'");
		
		while($rexq=mysql_fetch_array($qrx))
		
  {
	  if($rexq[5]=="yes" && $rexq[6]=="yes")
	  {
  echo "<td bgcolor='#99FFFF' width='30px' height='30px' align='center'>".$id."</td>";
	  }
	  else if($rexq[5]=="yes" && $rexq[6]==NULL)
	  {
  echo "<td bgcolor='#00FF66' width='30px' height='30px' align='center'>".$id."</td>";
	  }
	   else if($rexq[5]==NULL && $rexq[6]=="yes")
	  {
  echo "<td bgcolor='#CC99CC' width='30px' height='30px' align='center'>".$id."</td>";
	  }
	   else if($rexq[5]==NULL && $rexq[6]==NULL)
	  {
 echo "<td bgcolor='#FFFFFF' width='30px' height='30px' align='center'>".$id."</td>";
	  }
	  $id=$id+1;
  }
  echo "</tr></table>";
  ?>
  
</ul>
<div class="well well-lg"><b><?php if(isset($_SESSION['exid'])){echo $re[3];}?></b></div>
    <form action="" name="fex" id="fm1" method="post">
<div class="well well-sm"><b><input type="radio" value="a" name="a" id="rr1" onclick="ckrd1()" <?php if($re[4]=="a") echo 'checked';?>/><?php echo $rj[3];?></b></div>
<div class="well well-sm"><b><input type="radio" value="b" name="b" id="rr2" onclick="ckrd2()" <?php if($re[4]=="b") echo 'checked';?>/><?php echo $rj[4];?></b></div>
<div class="well well-sm"><b><input type="radio" value="c" name="c" id="rr3" onclick="ckrd3()" <?php if($re[4]=="c") echo 'checked';?>/><?php echo $rj[5];?></b></div>
<div class="well well-sm"><b><input type="radio" value="d" name="d" id="rr4" onclick="ckrd4()" <?php if($re[4]=="d") echo 'checked';?>/><?php echo $rj[6];?></b></div>
    <input type="reset" value="RESET" class="btn btn-primary" />
    <?php if($_SESSION['qcount']>$_SESSION['min']){echo '<input type="submit" value="SAVE & BACK" onclick="ac1()" class="btn btn-primary"/>';}else {echo ' ';}?>
    <?php if($_SESSION['qcount']<$_SESSION['max']){echo '<input type="submit" value="SAVE & NEXT" onclick="ac2()" class="btn btn-primary"/>';}else {echo ' ';}?>
	<?php if($re[5]==NULL){echo '<input type="submit" value="MARK REVIEW" onclick="ac4()" class="btn btn-primary"/>';}?>
    <?php if($re[5]=="yes"){echo '<input type="submit" value="UNMARK REVIEW" onclick="ac5()" class="btn btn-primary"/>';}?>
    <button data-toggle="modal" data-target="#myModal" class="btn btn-danger">SUBMIT</button>
    </form>
    <br />
    *COLOR PALATE DESCRIPTION
    <br />
    <table><tr><td bgcolor="#99FFFF">Attempted+Marked</td><td bgcolor="#00FF66">Marked for review</td><td bgcolor="#CC99CC">Attempted</td></tr></table>
    <br />



</ul>
</div>

</center>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Submit </h4>
      </div>
      
      <div class="modal-body">
      Are you sure you want to submit your exam?
    <form action="exsubmit.php" method="post">
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">NO</button>
        <input type="submit" class="btn btn-primary" value="YES" />
      </div>
</form>
     
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
 
	</div>
    <table border="1" align="center">
    <tr>
    <tr><td width="300px" height="300px"><img src="<?php if($rj[10]!=NULL){echo $rj[10];}else{echo "images\q_imgs\default.jpg";}?>" width="300px" height="300px"/></td></tr>
    </table><br /><br />
</body>
</html>