<?php 
require("db/dbcon.php");
$income=$_POST['income'];
$expense=$_POST['expense'];
$date=date("Y-m-d");
$description=$_POST['description'];
$q1="insert into caccounts(income,expense,date,description) values('$income','$expense','$date','$description')";
//echo $q1;
//exit;
mysql_query($q1);
header("location:caccounts.php?msg2=ssuccess");

 ?>