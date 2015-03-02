<?php
session_start();
include("db_connect.php");
extract($_POST);
echo $_FILES["file"]["name"];
echo $unm;
$sq="SELECT u_id FROM user_details where u_nm='".$unm."'";
$res=mysql_query($sq);
$r=mysql_fetch_array($res);
$allowedExts = array("gif", "jpeg", "jpg", "png");
$fname = $_FILES["file"]["name"];
$ext = explode(".", $fname);
echo $extension = $ext[1];
print_r($_FILES["file"]);
if($_FILES["file"]["name"]==NULL || strlen($fnm)<3 || strlen($lnm)<3 || strlen($mob)!=10 || strlen($addr)<6)
{
	header("location:details.php?smsxx=detils insufficient");	
}
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
      move_uploaded_file($_FILES["file"]["tmp_name"],"images/pro_pics/". $_FILES["file"]["name"]);
      echo "Stored in: " . "images/pro_pics/" . $_FILES["file"]["name"];
	  $store="images/pro_pics/" . $_FILES["file"]["name"];
     
    }
  }
else
  {
  echo "Invalid file";
  }

$sql="UPDATE user_details SET f_nm='".$fnm."',l_nm='".$lnm."',birthdate='".$date."',user_valid='YES',city='".$city."',ag_flag1='YES',gender='".$gender."',ph_no='".$mob."',u_addr='".$addr."',prof_path='".$store."' WHERE u_nm='".$unm."'";
mysql_query($sql);
$_SESSION['unm']=$unm;
header("location:student.php?sms=".$unm);


?>