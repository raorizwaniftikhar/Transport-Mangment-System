<?php 
require("db/dbcon.php");

$page_title=$_POST['page_title'];
$page_name=$_POST['page_name'];
$page_description=nl2br($_POST['description']);

$q1="insert into pages(page_name,page_title,page_description) values('$page_name','$page_title','$page_description')";

mysql_query($q1);
header("location:page.php?msg2=ssuccess");

 ?>