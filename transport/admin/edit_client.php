<?php include("themes/header.php"); 
require("db/dbcon.php");
if(is_numeric($_GET['id']))
{
$id=$_GET['id'];
}
else
{
$id=0;
}
$sql="select * from clients where id=".$id;
$rs=mysql_query($sql);
$row=mysql_fetch_array($rs);
?>
<br />
<div class="container">

<div class="titleheader">
<h3>Add New Client</h3>
</div>

<div class="outer-container">
<p class="text">This module has been created to add new Client profile</p>

<form name="" action="edit_client2.php" method="post" enctype="multipart/form-data">

<div class="field2">
<div class="label"><label>Name</label></div>
<input type="text" name="name" class="textfield2" value="<?php echo $row['name']; ?>" id="name">
<input type="hidden" name="id"  value="<?php echo $row['id']; ?>" >
</div>

<div class="field2">
<div class="label"><label>Company Name</label></div>
<input type="text" name="company_name" class="textfield2" value="<?php echo $row['company_name']; ?>" id="cname" >
</div>
<img src="../clients/<?php echo $row['company_logo']; ?>"  alt="Client Image" style="float: right;width: 240px;"/>
<div class="field">
<div class="label"><label>Address</label></div>
<input type="text" name="address" class="textfield" value="<?php echo $row['address']; ?>" >
</div>

<div class="field2">
<div class="label"><label>State</label></div>
<select name="state" class="textfield2">
<option value="">Select Client</option>
<option value="Dubai">Dubai</option>
<option value="Oman">Oman</option>
<option value="Ajman">Ajman</option>
<option value="Masqat">Masqat</option>
</select>
</div>


<div class="field2">
<div class="label"><label>Phone1</label></div>
<input type="text" name="phone1" class="textfield2"  style="margin-bottom:8px;" value="<?php echo $row['phone1']; ?>" id="no2">
</div>

<div class="field2">
<div class="label"><label>Phone2</label></div>
<input type="text" name="phone2" class="textfield2" value="<?php echo $row['phone2']; ?>" id="no3">
</div>

<div class="field2">
<div class="label"><label>Fax</label></div>
<input type="text" name="fax" class="textfield2" value="<?php echo $row['fax']; ?>" id="no4">
</div>

<div class="field2">
<div class="label"><label>Email</label></div>
<input type="text" name="email" class="textfield2" value="<?php echo $row['email']; ?>" id="email" >
</div>

<div class="field2">
<div class="label"><label>Web Address</label></div>
<input type="text" name="url" class="textfield2" style="margin-bottom:8px;" value="<?php echo $row['url']; ?>" id="no6" >
</div>


<div class="field2">
<div class="label"><label>Company Logo</label></div>
<input type="file" name="file" class="textfield2" >
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