<?php include("themes/header.php");?>
<script src="ckeditor/ckeditor.js"></script>
<script>

			
			CKEDITOR.appendTo( 'section1',
				null,
				'<p>This is some <strong>sample text</strong>. You are using <a href="http://ckeditor.com/">CKEditor</a>.</p>'
			);

		</script>
<div class="container">

<div class="titleheader">
<h3>Add New Page</h3>
</div>

<div class="outer-container">
<p class="text">This module has been created to add new page for your website</p>
<br />
<form action="add_page2.php"  method="post">

<div class="field">
<div class="label"><label for="name">Page Name:</label></div>
<input type="text" name="page_name" placeholder="Enter Page Name" class="textfield"  /> 
</div>

<div class="field">
<div class="label"><label for="name">Page Title:</label></div>
<input type="text" name="page_title" placeholder="Enter Page Title" class="textfield"  /> 
</div>


<div class="field">
<div class="label" style="margin-bottom:10px;"><label for="name">Message:</label></div>
<textarea rows="20" cols="70" class="ckeditor" id="section1" name="description"></textarea>
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

