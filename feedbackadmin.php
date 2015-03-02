<?php
include("adminheader.php");
echo '<div class="page-header">
  <h1>Feedback <small>Check feeback.</small></h1>
</div>';
?>
<?php
$sq="SELECT * FROM user_details where feed_back!=' '";
$res=mysql_query($sq);
while($r=mysql_fetch_array($res))
{
$up1=strtoupper(substr($r[1],0,1));
	$lr1=substr($r[1],1,strlen($r[1])-1);
	$final1=$up1.$lr1;
	$up2=strtoupper(substr($r[2],0,1));
	$lr2=substr($r[2],1,strlen($r[2])-1);
	$final2=$up2.$lr2;
	$_SESSION['f1']=$final1;
	$_SESSION['f2']=$final2;
	$_SESSION['imp']=$r[15];


echo "<blockquote class='blockquote-reverse'>
  <p>".$r[16]."</p>
  <footer>By <cite title='Source Title'>".$final1." ".$final2."</cite></footer>
</blockquote><br />";
}
?>

</div>
</body>
</html>