<?php include("themes/header.php"); ?>

<script language="javascript">
function validatepassword(frmpassword)
{
	if(frmpassword.curpassword.value.length == 0)
	{
		alert("Current Password is required.")
		frmpassword.curpassword.value == ""
		frmpassword.curpassword.focus()
		return false
	}  		
	if(frmpassword.newpassword.value.length == 0)
	{
		alert("New password is required.")
		frmpassword.newpassword.value == ""
		frmpassword.newpassword.focus()
		return false
	}  		
	if(frmpassword.confpassword.value.length == 0)
	{
		alert("Re-type New Password.")
		frmpassword.confpassword.value == ""
		frmpassword.confpassword.focus()
		return false
	}  		
	if(frmpassword.newpassword.value != frmpassword.confpassword.value)
	{
		alert("Re-type New Password.")
		frmpassword.confpassword.value == ""
		frmpassword.confpassword.focus()
		return false
	}  		
return true;
}
</script>
<br />
<div class="container">
<br />
<div class="titleheader">
<h3>Change Password</h3>
</div>
<div class="outer-container">

<p class="text" style="margin-top:10px;margin-bottom:10px;">This Module Helps to update password for admin panel.</p>
<?php if(isset($_GET['msg'])=="success"){ ?>
<div class="success"><p>Password Updated Successfully.</p></div>
<?php }?>
<div class="form" id="main" style="float:left;width:300px;">

<form method="post" action="cupdpassword.php" name="frmpassword" onSubmit="return validatepassword(frmpassword)">
<div class="field">
<div class="label"><label for="name">Current Password:</label><font color="#FF0000"><strong>*</strong></div>
<input name="curpassword" type="password" class="textfield" id="curpassword" size="30" /> </font>
</div>

<div class="element">
<div class="label"><label for="name">New Password:</label><font color="#FF0000"><strong>*</strong></div>
<input name="newpassword" type="password" class="textfield" id="newpassword" size="30"  style="margin-bottom: 20px;"/> </font>
</div>
<div class="element">
<div class="label"><label for="name">Re-type New Password:</label><font color="#FF0000"><strong>*</strong></font></div>
<input name="confpassword" type="password" class="textfield" id="confpassword" size="30" style="margin-bottom: 20px;" /> 
</div>
<div class="element">
<input type="submit" name="Submit" value="Change Password" class="submit button" />
</div>
</form>

</div>

</div>
</div>



<br />
<br />


<?php include("themes/footer.php"); ?>