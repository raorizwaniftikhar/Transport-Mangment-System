<?php include("themes/header.php"); ?>
<br />
<div class="container">

<div class="titleheader">
<h3>Add New Driver</h3>
</div>

<div class="outer-container">
<p class="text">This module has been created to add new Drivers profile</p>

<form name="" action="add_driver2.php" method="post" enctype="multipart/form-data">

<div class="field2">
<div class="label"><label>First Name</label></div>
<input type="text" name="finame" class="textfield2" id="name" >
</div>

<div class="field2">
<div class="label"><label>Last Name</label></div>
<input type="text" name="lname" class="textfield2" id="lname">
</div>

<div class="field2">
<div class="label"><label>Father Name</label></div>
<input type="text" name="fname" class="textfield2" id="fname">
</div>

<div class="field2">
<div class="label"><label>C.N.I.C</label></div>
<!--<input type="text" name="cnic" class="textfield2" id="cnic">-->
<input type="file" name="file4" class="textfield2" id="cnic"  />
</div>

<div class="field2">
<div class="label"><label>Phone1</label></div>
<input type="text" name="phone1" class="textfield2" id="phone">
</div>

<div class="field2">
<div class="label"><label>Phone2</label></div>
<input type="text" name="phone2" class="textfield2" id="phone2">
</div>

<div class="field">
<div class="label"><label>Address</label></div>
<input type="text" name="address" class="textfield" >
</div>

<div class="field2">
<div class="label"><label>License</label></div>
<input type="file" name="file1" class="textfield2" id="license">
</div>

<div class="field2">
<div class="label"><label>Liscense Expire Date</label></div>
<input type="text" name="lis_exdate" class="textfield2" style="margin-bottom:8px;" id="datepicker3" >
</div>

<div class="field2">
<div class="label"><label>Passport</label></div>
<input type="file" name="file2" class="textfield2" id="license">
</div>


<div class="field2">
<div class="label"><label>Passport Expire Date</label></div>
<input type="text" name="pass_exdate" class="textfield2" style="margin-bottom:8px;" id="datepicker4">
</div>


<div class="field2">
<div class="label"><label>Visa</label></div>
<input type="file" name="file3" class="textfield2"  id="license">
</div>

<div class="field2" >
<div class="label"><label>Visa Expire Date</label></div>
<input type="text" name="visa_exdate" class="textfield2" style="margin-bottom: 8px;" id="datepicker5">
</div>


<div class="field2" >
<div class="label"><label>Labour Number</label></div>
<input type="text" name="lab_no" class="textfield2" style="margin-bottom: 8px;" id="no">
</div>

<div class="field2">
<div class="label"><label>Labour Number Expire Date</label></div>
<input type="text" name="lab_exdate" class="textfield2" style="margin-bottom:8px;" id="datepicker6" >
</div>

<div class="field2">
<div class="label"><label>Driver Image</label></div>
<input type="file" name="file" class="textfield2"  id="license">
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