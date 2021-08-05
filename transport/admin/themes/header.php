<?php 
@ob_start();
session_start();
if(!isset($_SESSION['uid']))
{
header("location:index.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Transport</title>

<link rel="stylesheet" type="text/css" href="css/style.css" >

<link rel="stylesheet" href="css/jquery-ui.css">
 
</head>

<body>
<div class="header">
<div class="container">
<div class="top">
<h3>Admin Panel</h3>
<p>Welcome , Adminstrator || <a href="logout.php">Logout</a></p>
</div>
</div>
</div>

<div class="menu">
<div class="container">
<ul id="menu">
<li><a href="page.php">Pages</a></li>
<li><a href="client.php">Clients</a></li>
<li><a href="driver.php">Drivers</a></li>
<li><a href="vehicle.php">Vehicles</a></li>
<li><a href="allocation-main.php">Allocation</a></li>
<li><a href="accounts.php">Driver Accounts</a></li>
<li><a href="caccounts.php">Company Accounts</a></li>
<li><a href="cpassword.php">Change Password</a></li>
</ul>
</div>
</div>