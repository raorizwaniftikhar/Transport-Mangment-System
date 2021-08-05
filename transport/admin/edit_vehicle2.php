<?php 
require("db/dbcon.php");
$id=$_POST['id'];
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
			$q1 = "update vehicle set vehicle_no='$vehicle_no',vehicle_model='$vehicle_model',class_vehicle='$class_vehicle',color='$color',engine_no='$engine_no',chasis_no='$chasis_no',fitness_upto='$fitness_upto',reg_date='$reg_date' where id=".$id; 
				}
				else
				{
				if (file_exists("../waqala/" .$tt.$_FILES["file"]["name"]))
				{
				echo $_FILES["file"]["name"] . " already exists. ";
				}
				else
				{
				move_uploaded_file($_FILES["file"]["tmp_name"], "../waqala/" .$tt.$_FILES["file"]["name"]);				
				$q1 = "update vehicle set vehicle_no='$vehicle_no',vehicle_model='$vehicle_model',class_vehicle='$class_vehicle',color='$color',engine_no='$engine_no',chasis_no='$chasis_no',fitness_upto='$fitness_upto',reg_date='$reg_date',waqala='$image1' where id=".$id; 
				}
				}

mysql_query($q1);
header("location:vehicle.php?msg2=ssuccess");

 ?>