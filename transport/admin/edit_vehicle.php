<?php 
include("themes/header.php"); 
require("db/dbcon.php");
if(is_numeric($_GET['id']))
{
$id=$_GET['id'];
}
else
{
$id=0;
}
$sql="select * from vehicle where id=".$id;
$rs=mysql_query($sql);
$row=mysql_fetch_array($rs);
?>
<br />
<div class="container">

<div class="titleheader">
<h3>Update Vehicle</h3>
</div>

<div class="outer-container">
<p class="text">This module has been created to add Update Vehicle profile</p>

<form name="" action="edit_vehicle2.php" method="post" enctype="multipart/form-data">

<div class="field2">
<div class="label"><label>Vehicle Number</label></div>
<input type="text" name="vehicle_no" class="textfield2" value="<?php echo $row['vehicle_no']; ?>" id="no">
<input type="hidden" name="id" value="<?php echo $row['id']; ?>" >
</div>
<img src="../vehicles/<?php echo $row['image']; ?>" alt="" style="float:right;width:240px;" />
<div class="field2">
<div class="label"><label>Vehicle Model</label></div>
<input type="text" name="vehicle_model" class="textfield2" value="<?php echo $row['vehicle_model']; ?>" id="no2">
</div>

<div class="field2">
<div class="label"><label>Vehicle Class</label></div>
<input type="text" name="class_vehicle" class="textfield2" value="<?php echo $row['class_vehicle']; ?>" id="no3">
</div>


<div class="field2">
<div class="label"><label>Color</label></div>
<input type="text" name="color" class="textfield2" value="<?php echo $row['color']; ?>" id="no4">
</div>


<div class="field2">
<div class="label"><label>Engine Number</label></div>
<input type="text" name="engine_no" class="textfield2"  style="margin-bottom:8px;" value="<?php echo $row['engine_no']; ?>" id="no5">
</div>

<div class="field2">
<div class="label"><label>Chasis Number</label></div>
<input type="text" name="chasis_no" class="textfield2" value="<?php echo $row['chasis_no']; ?>" style="margin-bottom:8px;" id="no6">
</div>

<div class="field2">
<div class="label"><label>Fitness Upto</label></div>
<input type="text" name="fitness_upto" class="textfield2" value="<?php echo $row['fitness_upto']; ?>" id="datepicker">
</div>

<div class="field2">
<div class="label"><label>Registration Date</label></div>
<input type="text" name="reg_date" class="textfield2" style="margin-bottom:8px;" value="<?php echo $row['reg_date']; ?>" id="datepicker2">
</div>


<div class="field2">
<div class="label"><label>Waqalaa Image</label></div>
<input type="file" name="file" class="textfield2" >
</div>

<div class="field">
<input type="submit" name="submit" class="submit button" value="Submit">
</div>

</form>


</div>

</div>

<br />
<br />

<?php include("themes/footer.php"); ?>