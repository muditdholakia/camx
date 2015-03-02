<?php

include("db_connect.php");
$count=0;
$u=mysql_query("SELECT * FROM user_details where u_nm='".$_POST['unm']."'");
if($r = mysql_fetch_array($u))
{
	$count=$count+1;	
}


if($count==1)
{
$sq="SELECT u_id FROM user_details where u_nm='".$_POST['unm']."'";
$res=mysql_query($sq);
$r=mysql_fetch_array($res);
$allowedExts = array("pdf","pdf");
$fname = $_FILES["file"]["name"];
$ext = explode(".", $fname);
echo $extension = $ext[1];
print_r($_FILES["file"]);

if (($_FILES["file"]["type"] == "application/pdf")&&($_FILES["file"]["size"] < 200000000)&&in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
	$count=$count+1;
	$msg[10]="ERROR";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

   		$_FILES["file"]["name"]="$r[0]"."."."$ext[1]";
      move_uploaded_file($_FILES["file"]["tmp_name"],"std_docs/". $_FILES["file"]["name"]);
      echo "Stored in: " . "std_docs/" . $_FILES["file"]["name"];
	  $store="std_docs/" . $_FILES["file"]["name"];
     
    }
  }
else
  {
  echo "Invalid file";
  }

$sl="UPDATE user_details SET doc_path='".$store."' WHERE u_nm='".$_POST['unm']."'";
mysql_query($sl);

header("location:loginp2.php?sms=UPDATED SUCESSFULLY");
}
?>