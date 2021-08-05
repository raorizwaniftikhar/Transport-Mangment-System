<?php 
require("db/dbcon.php");

$vehicle_no=$_POST['vehicle_no'];
$vehicle_model=$_POST['vehicle_model'];
$class_vehicle=$_POST['class_vehicle'];
$color=$_POST['color'];
$engine_no=$_POST['engine_no'];
$chasis_no=$_POST['chasis_no'];
$fitness_upto=$_POST['fitness_upto'];
$reg_date=$_POST['reg_date'];
$tt=date("hms");
$image1 =$tt.$_FILES['file']['name']; 
if ($_FILES["file"]["error"] > 0)
				{
					$image1 ="noimage.jpg"; 
				}
				else
				{
				if (file_exists("../vehicles/" .$tt.$_FILES["file"]["name"]))
				{
				echo $_FILES["file"]["name"] . " already exists. ";
				}
				else
				{
				move_uploaded_file($_FILES["file"]["tmp_name"], "../vehicles/" .$tt.$_FILES["file"]["name"]);				
				}
				}


$image2 =$tt.$_FILES['file2']['name']; 
if ($_FILES["file2"]["error"] > 0)
				{
					$image2 ="noimage.jpg"; 
				}
				else
				{
				if (file_exists("../waqala/" .$tt.$_FILES["file2"]["name"]))
				{
				echo $_FILES["file2"]["name"] . " already exists. ";
				}
				else
				{
				move_uploaded_file($_FILES["file2"]["tmp_name"], "../waqala/" .$tt.$_FILES["file2"]["name"]);				
				}
				}

$image3 =$tt.$_FILES['file3']['name']; 
if ($_FILES["file3"]["error"] > 0)
				{
					$image3 ="noimage.jpg"; 
				}
				else
				{
				if (file_exists("../regcard/" .$tt.$_FILES["file3"]["name"]))
				{
				echo $_FILES["file3"]["name"] . " already exists. ";
				}
				else
				{
				move_uploaded_file($_FILES["file3"]["tmp_name"], "../regcard/" .$tt.$_FILES["file3"]["name"]);				
				}
				}


$q1="insert into vehicle(vehicle_no,vehicle_model,class_vehicle,color,engine_no,chasis_no,fitness_upto,reg_date,image,waqala,regcard) values('$vehicle_no','$vehicle_model','$class_vehicle','$color','$engine_no','$chasis_no','$fitness_upto','$reg_date','$image1','$image2','$image3')";

mysql_query($q1);
header("location:vehicle.php?msg2=ssuccess");

 ?>