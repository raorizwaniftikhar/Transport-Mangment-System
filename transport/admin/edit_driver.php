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
$sql="select * from drivers where id=".$id;
$rs=mysql_query($sql);
$row=mysql_fetch_array($rs);
 ?>
<br />
<div class="container">

<div class="titleheader">
<h3>Edit Already Existing Driver</h3>
</div>

<div class="outer-container">
<p class="text">This module has been created to Update Drivers profile</p>

<form name="" action="edit_driver2.php" method="post" enctype="multipart/form-data">

<div class="field2">
<div class="label"><label>First Name</label></div>
<input type="text" name="finame" class="textfield2" value="<?php echo $row['finame']; ?>"  id="name">
<input type="hidden" name="id"  value="<?php echo $row['id']; ?>" >
</div>

<div class="field2">
<div class="label"><label>Last Name</label></div>
<input type="text" name="lname" class="textfield2" value="<?php echo $row['lname']; ?>" id="lname">
</div>
<img src="../drivers/<?php echo $row['lis_no']; ?>" alt="Liscense Image"  style="float: right;width: 240px;" title="License Image" />
<div class="field2">
<div class="label"><label>Father Name</label></div>
<input type="text" name="fname" class="textfield2" value="<?php echo $row['fname']; ?>" id="fname">
</div>

<div class="field2">
<div class="label"><label>Phone1</label></div>
<input type="text" name="phone1" class="textfield2" value="<?php echo $row['phone1']; ?>" id="no5">
</div>

<div class="field2">
<div class="label"><label>Phone2</label></div>
<input type="text" name="phone2" class="textfield2" value="<?php echo $row['phone2']; ?>" id="no4">
</div>

<div class="field">
<div class="label"><label>Address</label></div>
<input type="text" name="address" class="textfield" value="<?php echo $row['address']; ?>">
</div>

<div class="field2">
<div class="label"><label>License</label></div>
<input type="file" name="file" class="textfield2" >
</div>

<div class="field2">
<div class="label"><label>Liscense Expire Date</label></div>
<input type="text" name="lis_exdate" class="textfield2" style="margin-bottom:8px;" value="<?php echo $row['lis_exdate']; ?>" id="datepicker3">
</div>

<div class="field2">
<div class="label"><label>Passport Expire Date</label></div>
<input type="text" name="pass_exdate" class="textfield2" style="margin-bottom:8px;" value="<?php echo $row['pass_exdate']; ?>" id="datepicker4">
</div>

<div class="field2" >
<div class="label"><label>Visa Expire Date</label></div>
<input type="text" name="visa_exdate" class="textfield2" style="margin-bottom: 8px;" value="<?php echo $row['visa_exdate']; ?>" id="datepicker5">
</div>


<div class="field2" >
<div class="label"><label>Labour Number</label></div>
<input type="text" name="lab_no" class="textfield2" style="margin-bottom: 8px;" value="<?php echo $row['lab_no']; ?>" id="no">
</div>

<div class="field2">
<div class="label"><label>Labour Number Expire Date</label></div>
<input type="text" name="lab_exdate" class="textfield2" style="margin-bottom:8px;" value="<?php echo $row['lab_exdate']; ?>" id="datepicker6">
</div>



<div class="field">
<input type="submit" name="submit" class="submit button"  value="Submit">
</div>

</form>


</div>

</div>

<br />
<br />

<?php include("themes/footer.php"); ?>