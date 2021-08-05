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
 $tq2=mysql_query("select * from accounts where id=".$id);
 $trow=mysql_fetch_array($tq2);
 ?>
<br />
<div class="container">

<div class="titleheader">
<h3>Update Driver Cash</h3>
</div>

<div class="outer-container">
<p class="text">This module has been created to Manage Driver Accounts</p>

<form name="" action="upaccount2.php" method="post" enctype="multipart/form-data">

<div class="field2">
<div class="label"><label>Driver</label></div>
<input type="hidden" name="id" value="<?php echo $id; ?>"  />
<input type="text" name="dname" class="textfield2" disabled="disabled" value="<?php echo $_GET['n']; ?>">
</div>

<div class="field2">
<div class="label"><label>Total Cash</label></div>
<input type="text" class="textfield2" style="margin-bottom:8px;" disabled="disabled" value="<?php echo $trow['total_amount']; ?>">
<input type="hidden" name="total_amount" value="<?php echo $trow['total_amount']; ?>">
</div>

<!--<div class="field2">
<div class="label"><label>Remaining Cash</label></div>
<input type="text" name="total_amount" class="textfield2" style="margin-bottom:8px;" disabled="disabled" value="<?php // echo $trow['remaining']; ?>">
<input type="hidden" name="total_amount" value="<?php //echo $trow['remaining']; ?>">
</div>-->

<div class="field2">
<div class="label"><label>Add Cash</label></div>
<input type="text" name="add_cash" class="textfield2" value="">
</div>


<div class="field">
<input type="submit" name="addcash" value="Add Cash +" class="submit button" />&nbsp;&nbsp;&nbsp;<input type="submit" name="subcash" value="Subtract cash -" class="submit button" />
</div>

</form>


</div>

</div>

<br />
<br />

<?php include("themes/footer.php"); ?>