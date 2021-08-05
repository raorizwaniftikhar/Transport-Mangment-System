<?php 
@session_start();
@ob_start();
if(!isset($_SESSION['uid']))
	header("location: index.php");

require("db/dbcon.php");

$q1 = "DELETE from pages where id = '".$_GET['id']."'";
mysql_query($q1);

header("location:page.php?mssg=dsuccess");
?>