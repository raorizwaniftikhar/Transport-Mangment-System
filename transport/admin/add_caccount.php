<?php include("themes/header.php");
require("db/dbcon.php");
 ?>
<script src="ckeditor/ckeditor.js"></script>
<br />
<div class="container">

<div class="titleheader">
<h3>Add New Company Account</h3>
</div>

<div class="outer-container">
<p class="text">This module has been created to Manage Company Account</p>

<form name="" action="add_caccount2.php" method="post" enctype="multipart/form-data">

<div class="field2">
<div class="label"><label>Today Income</label></div>
<input type="text" name="income" class="textfield2" />
</div>


<div class="field2">
<div class="label"><label>Today Expense</label></div>
<input type="text" name="expense" class="textfield2" />
</div>


<div class="field">
<div class="label" style="margin-bottom:10px;"><label>Description</label></div>
<textarea name="description" class="textfield" style="max-width:100%; width:960px;"></textarea>
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