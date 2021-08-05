<?php 
require("db/dbcon.php");
$id=$_POST['id'];
$finame=$_POST['finame'];
$lname=$_POST['lname'];
$fname=$_POST['fname'];
$phone1=$_POST['phone1'];
$phone2=$_POST['phone2'];
$address=$_POST['address'];
$lis_exdate=$_POST['lis_exdate'];
$pass_exdate=$_POST['pass_exdate'];
$visa_exdate=$_POST['visa_exdate'];
$lab_no=$_POST['lab_no'];
$lab_exdate=$_POST['lab_exdate'];
$tt=date("hms");

$image1 =$tt.$_FILES['file']['name']; 

if ($_FILES["file"]["error"] > 0)
				{
					$q1 = "update drivers set finame='$finame',lname='$lname',fname='$fname',phone1='$phone1',phone2='$phone2',address='$address',lis_exdate='$lis_exdate',pass_exdate='$pass_exdate',visa_exdate='$visa_exdate',lab_no='$lab_no',lab_exdate='$lab_exdate' where id=".$id;
				}
				else
				{
		
					if (file_exists("../drivers/" .$tt.$_FILES["file"]["name"]))
					{
						echo $_FILES["file"]["name"] . " already exists. ";
					}
					else
					{
						move_uploaded_file($_FILES["file"]["tmp_name"], "../drivers/" .$tt.$_FILES["file"]["name"]);
								$q1 = "update drivers set finame='$finame',lname='$lname',fname='$fname',phone1='$phone1',phone2='$phone2',address='$address',lis_exdate='$lis_exdate',pass_exdate='$pass_exdate',visa_exdate='$visa_exdate',lab_no='$lab_no',lab_exdate='$lab_exdate',lis_no='$image1' where id=".$id;	
					}
				}

//echo $q1;
//exit;
mysql_query($q1);
header("location:driver.php?msg2=ssuccess");

 ?>