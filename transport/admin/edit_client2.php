<?php 
require("db/dbcon.php");
$id=$_POST['id'];
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

$image1 =$tt.$_FILES['file']['name']; 

if ($_FILES["file"]["error"] > 0)
				{
					$q1 = "update clients set name='$name',company_name='$company_name',address='$address',state='$state',phone1='$phone1',phone2='$phone2',fax='$fax',url='$url',email='$email' where id=".$id;
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
							$q1 = "update clients set name='$name',company_name='$company_name',address='$address',state='$state',phone1='$phone1',phone2='$phone2',fax='$fax',url='$url',email='$email' ,company_logo='$image1' where id=".$id;	
					}
				}

//echo $q1;
//exit;
mysql_query($q1);
header("location:client.php?msg2=ssuccess");

 ?>