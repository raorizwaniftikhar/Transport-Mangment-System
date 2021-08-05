<?php 
require("db/dbcon.php");

$name=$_POST['name'];
$company_name=$_POST['company_name'];
$address=$_POST['address'];
$state=$_POST['state'];
$phone1=$_POST['phone1'];
$phone2=$_POST['phone2'];
$fax=$_POST['fax'];
$email=$_POST['email'];
$url=$_POST['url'];
$tt=date("hms");
//$date=date("Y-m-d");
$image1 =$tt.$_FILES['file']['name']; 
if ($_FILES["file"]["error"] > 0)
				{
					$image1 ="noimage.jpg"; 
				}
				else
				{
				if (file_exists("../clients/" .$tt.$_FILES["file"]["name"]))
				{
				echo $_FILES["file"]["name"] . " already exists. ";
				}
				else
				{
				move_uploaded_file($_FILES["file"]["tmp_name"], "../clients/" .$tt.$_FILES["file"]["name"]);				
				}
				}

$q1="insert into clients(name,company_name,address,state,phone1,phone2,fax,email,url,company_logo) values('$name','$company_name','$address','$state','$phone1','$phone2','$fax','$email','$url','$image1')";

mysql_query($q1);
header("location:client.php?msg2=ssuccess");

 ?>