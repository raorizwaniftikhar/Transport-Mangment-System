<?php 
require("db/dbcon.php");

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
$date=date("Y-m-d");
//driver image
$image1 =$tt.$_FILES['file']['name']; 
if ($_FILES["file"]["error"] > 0)
				{
					$image1 ="dnoimage.jpg"; 
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
				}
				}

//liscense image

$image5 =$tt.$_FILES['file1']['name']; 

if ($_FILES["file1"]["error"] > 0)
				{
					$image5 ="lnoimage.jpg"; 
				}
				else
				{

					if (file_exists("../drivers/" .$tt.$_FILES["file1"]["name"]))

					{
						echo $_FILES["file1"]["name"] . " already exists. ";
					}
					else
					{
						move_uploaded_file($_FILES["file1"]["tmp_name"], "../drivers/" .$tt.$_FILES["file1"]["name"]);			

					}
				}				
//passport image
$image2 =$tt.$_FILES['file2']['name']; 

if ($_FILES["file2"]["error"] > 0)
				{
					$image2 ="pnoimage.jpg"; 
				}
				else
				{

					if (file_exists("../drivers/" .$tt.$_FILES["file2"]["name"]))

					{
						echo $_FILES["file2"]["name"] . " already exists. ";
					}
					else
					{
						move_uploaded_file($_FILES["file2"]["tmp_name"], "../drivers/" .$tt.$_FILES["file2"]["name"]);			

					}
				}
//visa image				
$image3 =$tt.$_FILES['file3']['name']; 

if ($_FILES["file3"]["error"] > 0)
				{
					$image3 ="vnoimage.jpg"; 
				}
				else
				{

					if (file_exists("../drivers/" .$tt.$_FILES["file3"]["name"]))

					{
						echo $_FILES["file3"]["name"] . " already exists. ";
					}
					else
					{
						move_uploaded_file($_FILES["file3"]["tmp_name"], "../drivers/" .$tt.$_FILES["file3"]["name"]);			

					}
				}					
//CNIC image				
$image4 =$tt.$_FILES['file4']['name']; 

if ($_FILES["file4"]["error"] > 0)
				{
					$image4 ="cnoimage.jpg"; 
				}
				else
				{

					if (file_exists("../cnic/" .$tt.$_FILES["file4"]["name"]))

					{
						echo $_FILES["file4"]["name"] . " already exists. ";
					}
					else
					{
						move_uploaded_file($_FILES["file4"]["tmp_name"], "../cnic/" .$tt.$_FILES["file4"]["name"]);			

					}
				}
$q1="insert into drivers(finame,lname,fname,cnic,phone1,phone2,address,lis_no,lis_exdate,visa_no,visa_exdate,pass_no,pass_exdate,lab_no,lab_exdate,image) values('$finame','$lname','$fname','$image4','$phone1','$phone2','$address','$image5','$lis_exdate','$image3','$visa_exdate','$image2','$pass_exdate','$lab_no','$lab_exdate','$image1')";


mysql_query($q1);
header("location:driver.php?msg2=ssuccess");

 ?>