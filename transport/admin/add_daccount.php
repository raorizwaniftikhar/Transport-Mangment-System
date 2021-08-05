<?php include("themes/header.php");
require("db/dbcon.php");
 ?>
<br />
<div class="container">

<div class="titleheader">
<h3>Add New Driver Account</h3>
</div>

<div class="outer-container">
<p class="text">This module has been created to Manage Diver Account</p>

<form name="" action="add_daccount2.php" method="post" enctype="multipart/form-data">


<div class="field2">
<div class="label"><label>Driver Name</label></div>
<select name="driver" class="textfield2">
<option value="">Please Select Driver</option>
<?php 
$q1=mysql_query("select * from drivers");
while($row=mysql_fetch_array($q1))
{
?>
<option value="<?php echo $row['id']; ?>"><?php echo $row['finame']; ?>&nbsp;<?php echo $row['lname']; ?></option>
<?php }?>
</select>
</div>

<div class="field2">
<div class="label"><label>Total Cash</label></div>
<input type="text" name="total_cash" class="textfield2" id="name" /></div>

<div class="field">
<input type="submit" name="submit" class="submit button" value="Submit" >
</div>

</form>


</div>

</div>

<br />
<br />

<?php include("themes/footer.php"); ?>