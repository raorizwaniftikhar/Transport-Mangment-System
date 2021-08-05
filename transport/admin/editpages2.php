<?php 
@ob_start();
require("db/dbcon.php"); 

$id=mysql_real_escape_string($_POST['id']);

$q1 = "update pages set page_name='".$_POST['page_name']."', page_title='".$_POST['page_title']."', page_description='".addslashes($_POST['description'])."' where id=".$id;

mysql_query($q1);

header("location:page.php?msg3=usuccess");

?>

