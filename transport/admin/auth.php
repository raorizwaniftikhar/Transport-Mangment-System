<?php 
@session_start();
@ob_start();
require("db/dbcon.php");

$userid = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);

$q1 =	"SELECT * FROM admin WHERE "
		. "username = '$userid' AND "
		. "password = '$password' AND "
		. "type='admin'";

$rs1 = mysql_query($q1);
$row = mysql_fetch_row($rs1);
$num_results = mysql_num_rows($rs1);


if ($num_results > 0){

$_SESSION['uid']= $row[0];
$_SESSION['name'] = $row[1];
$_SESSION['username'] = $row[2];
$_SESSION['email'] = $row[4];

header("location: admin.php");
}
else
{
header("location: index.php?error=1");
}
mysql_free_result($rs1);
mysql_close($con);
?>