<?php 
@session_start();
@ob_start();
if(!isset($_SESSION['uid']))
	header("location: index.php");

require("db/dbcon.php");

if(is_numeric($_GET['id']))
{
$id=$_GET['id'];
}
else
{
$id=0;
}

$q1 = "DELETE from drivers where id =".$id;
mysql_query($q1);

header("location:driver.php?mssg=dsuccess");
?>