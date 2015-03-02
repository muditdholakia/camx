<?php

include("adminheader.php");
?>

<?php


$sq1="SELECT * FROM ex_data where srno='".$_GET['srno']."'";
$res1=mysql_query($sq1);
$r1=mysql_fetch_array($res1);
?>
<br /><center>
<div class="jumbotron" style="width:500px">
<img src='<?php if($r1[10]==NULL){echo "images/pro_pics/default.jpg";}else {echo $r1[10];}?>' class="img-thumbnail" height="150px" width="150px"  /><h4>Subject Id : <?php echo $r1[1];?></h4><h4>Question String : <?php echo $r1[2];?></h4><h4>Answer 1 : <?php echo $r1[3];?></h4><h4>Answer 2 : <?php echo $r1[4];?></h4><h4>Answer 3 : <?php  echo $r1[5];?></h4><h4>Answer 4 : <?php echo $r1[6];?></h4><h4>Correct Answer : <?php echo $r1[7];?></h4><h4>Weight : <?php echo $r1[8];?></h4><h4>Difficulty Level : <?php echo $r1[9];?></h4>
</center>
</div>  
</div>
</body>
</html>