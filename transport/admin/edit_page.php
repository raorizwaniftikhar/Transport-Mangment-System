<?php include("themes/header.php");
require("db/dbcon.php");
$id=mysql_real_escape_string($_GET['id']);
$sql="select * from pages where id=".$id;
$rs=mysql_query($sql);
$row=mysql_fetch_array($rs);

?>
<script src="ckeditor/ckeditor.js"></script>
<script>

			
			CKEDITOR.appendTo( 'section1',
				null,
				'<p>This is some <strong>sample text</strong>. You are using <a href="http://ckeditor.com/">CKEditor</a>.</p>'
			);

		</script>
<div class="container">

<div class="titleheader">
<h3>Edit / Update Page</h3>
</div>

<div class="outer-container">
<p class="text">This module has been created to Edit / Update page for your website</p>
<br />
<form action="editpages2.php"  method="post">

<div class="field">
<div class="label"><label for="name">Page Name:</label></div>
<input type="text" name="page_name" value="<?php echo $row['page_name']; ?>" class="textfield"  /> 
<input type="hidden" name="id" value="<?php echo $id; ?>"  /> 
</div>

<div class="field">
<div class="label"><label for="name">Page Title:</label></div>
<input type="text" name="page_title" value="<?php echo $row['page_title']; ?>"  class="textfield"  /> 
</div>


<div class="field">
<div class="label" style="margin-bottom:10px;"><label for="name">Message:</label></div>
<textarea rows="20" cols="70" class="ckeditor" id="section1" name="description"><?php echo $row['page_description']; ?></textarea>
<!--<div id="section1">
<script>

			
			CKEDITOR.appendTo( 'section1',
				null,
				'<p>This is some <strong>sample text</strong>. You are using <a href="http://ckeditor.com/">CKEditor</a>.</p>'
			);

		</script>
		</div>-->
		</div>

<div class="field">
<input type="submit" name="submit" value="Submit"  class="submit" /></div>

</form>

</div>

<br />
</div>

<?php include("themes/footer.php"); ?>

