<?php 
include("db/dbcon.php");

$vehicle=$_POST['vehicle'];
$vehicle_model=$_POST['vehicle_model'];
$driver=$_POST['driver'];
$date=date("Y-m-d");
$q1="insert into allocation(vehicle,vehicle_model,driver,date) values('$vehicle','$vehicle_model','$driver','$date')";

mysql_query($q1);

header("location:allocation-main.php?msg2=success");

?>