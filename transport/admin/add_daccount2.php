<?php 
require("db/dbcon.php");

$driver=$_POST['driver'];
$total_cash=$_POST['total_cash'];
$date=date("Y-m-d");
$q1="insert into accounts(driver_id,total_amount,add_cash,date,remaining) values('$driver','$total_cash','','$date','')";
//echo $q1;
//exit;
mysql_query($q1);
header("location:accounts.php?msg2=ssuccess");

 ?>