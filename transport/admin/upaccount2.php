<?php
require("db/dbcon.php");



if(isset($_POST['subcash']))
{
$id=$_POST['id'];
$driver=$_POST['driver'];
$add_cash=$_POST['add_cash'];
$total_amount=$_POST['total_amount'];
$totalcashfinal= $total_amount - $add_cash;

mysql_query("update accounts SET total_amount='".$totalcashfinal."'  , add_cash='".$add_cash."' where id= '".$id."'");
//echo "update accounts SET total_amount='".$total_amount."' , remaining = '" . $totalcashfinal . "' , add_cash='".$add_cash."' where id= '".$id."'";
//exit;
header("location:accounts.php?msg2=success");
}

if(isset($_POST['addcash']))
{
$id=$_POST['id'];
$driver=$_POST['driver'];
$add_cash=$_POST['add_cash'];
$total_amount=$_POST['total_amount'];
$totalcashfinal= $total_amount + $add_cash;
/*echo "update accounts SET total_amount='".$total_amount."' , remaining = '" . $totalcashfinal . "' , add_cash='".$add_cash."' where id= '".$id."'";
exit;*/
mysql_query("update accounts SET total_amount='".$totalcashfinal."'  , add_cash='".$add_cash."' where id= '".$id."'");

header("location:accounts.php?msg2=success");
}

?>