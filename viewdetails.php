<?php

include("adminheader.php");
?>

<?php


$sq1="SELECT * FROM user_details where u_id='".$_GET['srno']."'";
$res1=mysql_query($sq1);
$r1=mysql_fetch_array($res1);
if($r1[1]!=NULL)
{
$up1=strtoupper(substr($r1[1],0,1));
	$lr1=substr($r1[1],1,strlen($r1[1])-1);
	$final1=$up1.$lr1;
	$up2=strtoupper(substr($r1[2],0,1));
	$lr2=substr($r1[2],1,strlen($r1[2])-1);
	$final2=$up2.$lr2;
	$up3=strtoupper(substr($r1[3],0,1));
	$lr3=substr($r1[3],1,strlen($r1[3])-1);
	$final3=$up3.$lr3;
}
?>
<br /><center>
<div class="jumbotron" style="width:500px">
<img src='<?php if($r1[15]==NULL){echo "images/pro_pics/default.jpg";}else {echo $r1[15];}?>' class="img-thumbnail" height="150px" width="150px"  /><h4>First Name : <?php if($r1[1]==NULL){echo "NOT SUBMITTED";}else{echo $final1;}?></h4><h4>Last Name : <?php if($r1[2]==NULL){echo "NOT SUBMITTED";}else{echo $final2;}?></h4><h4>Gender : <?php if($r1[3]==NULL){echo "NOT SUBMITTED";}else{ echo $final3;}?></h4><h4>Date of Birth(YYYY-MM-DD) : <?php if($r1[6]==NULL){echo "NOT SUBMITTED";}else{echo $r1[6];}?></h4><h4>User Validity : <?php if($r1[7]==NULL){echo "NOT SUBMITTED";}else{ echo $r1[7];}?></h4><h4>City : <?php if($r1[8]==NULL){echo "NOT SUBMITTED";}else{ echo $r1[8];}?></h4><h4>User Type : <?php if($r1[9]==NULL){echo "NOT SUBMITTED";}else{echo $r1[9];}?></h4><h4>Agreement Passed : <?php if($r1[10]==NULL){echo "NOT SUBMITTED";}else{echo $r1[10];}?></h4><h4>Verification : <?php if($r1[11]==NULL){echo "NOT SUBMITTED";}else{echo $r1[11];}?></h4><h4>Phone Number : <?php if($r1[12]==NULL){echo "NOT SUBMITTED";}else{echo $r1[12];}?></h4><h4>Address : <?php if($r1[13]==NULL){echo "NOT SUBMITTED";}else{echo $r1[13];}?></h4>
</center>
</div>  
</div>
</body>
</html>