<?php 
include("themes/header.php");
require("db/dbcon.php");
 ?>
<br />
<div class="container">

<div class="titleheader">
<h3>Allocate Vehicles to Drivers</h3>
</div>

<div class="outer-container">
<p class="text">This module has been created to Allocate vehicles to Drivers</p>

<form name="" action="allocation2.php" method="post" enctype="multipart/form-data">

<div class="field2">
<div class="label"><label>Vehicle Number</label></div>
<select name="vehicle" class="textfield2">
<option value="">Select Vehicle Number</option>
<?php 
$q1=mysql_query("select * from vehicle");
while($row=mysql_fetch_array($q1))
{
 ?>
<option value="<?php echo $row['vehicle_no']; ?>"><?php echo $row['vehicle_no']; ?></option>
<?php }?>
</select>
</div>

<div class="field2">
<div class="label"><label>Vehicle Model</label></div>
<select name="vehicle_model" class="textfield2">
<option value="">Select Vehicle</option>
<?php 
$q1=mysql_query("select * from vehicle");
while($row=mysql_fetch_array($q1))
{
 ?>
<option value="<?php echo $row['vehicle_model']; ?>"><?php echo $row['vehicle_model']; ?></option>
<?php }?>
</select>
</div>

<div class="field2">
<div class="label"><label>Drivers</label></div>
<select name="driver" class="textfield2">
<option value="">Select Driver</option>
<?php 
$q1=mysql_query("select * from drivers");
while($row=mysql_fetch_array($q1))
{
 ?>
<option value="<?php echo $row['id']; ?>"><?php echo $row['finame']; ?>&nbsp;<?php echo $row['lname']; ?></option>
<?php }?>
</select>
</div>


<div class="field">
<input type="submit" name="submit" class="submit button" value="Submit" >
</div>

</form>


</div>

</div>

<br />
<br />

<?php include("themes/footer.php"); ?>