<?php include("themes/header.php"); ?>
<br />
<div class="container">

<div class="titleheader">
<h3>Add New Vehicle</h3>
</div>

<div class="outer-container">
<p class="text">This module has been created to add new Vehicle profile</p>

<form name="" action="add_vehicle2.php" method="post" enctype="multipart/form-data">

<div class="field2">
<div class="label"><label>Vehicle Number</label></div>
<input type="text" name="vehicle_no" class="textfield2" id="no" >
</div>

<div class="field2">
<div class="label"><label>Vehicle Model</label></div>
<input type="text" name="vehicle_model" class="textfield2" id="no2">
</div>

<div class="field2">
<div class="label"><label>Vehicle Class</label></div>
<input type="text" name="class_vehicle" class="textfield2" id="no3">
</div>


<div class="field2">
<div class="label"><label>Color</label></div>
<input type="text" name="color" class="textfield2" id="no4">
</div>


<div class="field2">
<div class="label"><label>Engine Number</label></div>
<input type="text" name="engine_no" class="textfield2"  style="margin-bottom:8px;" id="no5">
</div>

<div class="field2">
<div class="label"><label>Chasis Number</label></div>
<input type="text" name="chasis_no" class="textfield2" style="margin-bottom:8px;" id="no6">
</div>

<div class="field2">
<div class="label"><label>Fitness Upto</label></div>
<input type="text" name="fitness_upto" class="textfield2" id="datepicker" >
</div>

<div class="field2">
<div class="label"><label>Registration Date</label></div>
<input type="text" name="reg_date" class="textfield2" style="margin-bottom:8px;" id="datepicker2">
</div>


<div class="field2">
<div class="label"><label>Vehicle Image</label></div>
<input type="file" name="file" class="textfield2" >
</div>

<div class="field2">
<div class="label"><label>Waqalaa Image</label></div>
<input type="file" name="file2" class="textfield2" >
</div>

<div class="field2">
<div class="label"><label>Vehicle registration Card</label></div>
<input type="file" name="file3" class="textfield2" >
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