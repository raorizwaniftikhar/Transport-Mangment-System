<?php
session_start();
require("db/dbcon.php");
if(isset($_SESSION['uid']))
{
	$qry_chkpswd="select id from admin where password='".$_POST['curpassword']."'";
	$rs_chkpswd=mysql_query($qry_chkpswd);
	if(mysql_num_rows($rs_chkpswd) == 0){
		echo '<script language="javascript">alert("Your current password is not correct.Please try again.");window.location="password.php";</script>';
		exit;
	} else {
		///update query
		$qry_updpassword="update admin set
						password 	= '".$_POST['newpassword']."'
						where id = '".$_SESSION['uid']."'";
		$rs=mysql_query($qry_updpassword);
		header("location:cpassword.php?msg=success");
	}
} else {
	echo '<script language="javascript">window.location="index.php";</script>';
	exit;
}
?>