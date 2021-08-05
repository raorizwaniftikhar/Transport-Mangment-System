

<div class="footer">
<div class="container">
<p>&copy; Copyright 2014 <a href="#">Najmat - Al - Rasheed Transport</a></p>
</div>
</div>
 <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
  <script type="text/javascript" src="js/jquery-ui.js"></script>
 <script  type="text/javascript">
  $(function() {
    $( "#datepicker" ).datepicker({dateFormat: 'yy-mm-dd'});
	$( "#datepicker2" ).datepicker({dateFormat: 'yy-mm-dd'});
	$( "#datepicker3" ).datepicker({dateFormat: 'yy-mm-dd'});
	$( "#datepicker4" ).datepicker({dateFormat: 'yy-mm-dd'});
	$( "#datepicker5" ).datepicker({dateFormat: 'yy-mm-dd'});
	$( "#datepicker6" ).datepicker({dateFormat: 'yy-mm-dd'});
  });
  </script>
<script src="js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
            /* <![CDATA[ */
            jQuery(function(){
               /* jQuery("#ValidNumber").validate({
                    expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
                    message: "Should be a number"
                });*/
				jQuery("#name").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Name Required field"
                });
				jQuery("#cname").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Name Required field"
                });
				jQuery("#lname").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Last Name Required field"
                });
				jQuery("#fname").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "Please enter the Father Name Required field"
                });
				
				jQuery("#no").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "This is required Field"
                });
				jQuery("#no2").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "This is required Field"
                });
				jQuery("#no3").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "This is required Field"
                });
				jQuery("#no4").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "This is required Field"
                });
				jQuery("#no5").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "This is required Field"
                });
				jQuery("#no6").validate({
                    expression: "if (VAL) return true; else return false;",
                    message: "This is required Field"
                });
				
				jQuery("#cnic").validate({
                    expression: "if (VAL.match(/^[9][0-9]{9}$/)) return true; else return false;",
                    message: "Please enter the Required field username"
                });
                jQuery("#email").validate({
                    expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
                    message: "Should be a valid Email id"
                });
            jQuery("#password").validate({
                    expression: "if (VAL.length > 5 && VAL) return true; else return false;",
                    message: "Please enter a valid Password like 12345"
                });
              
				jQuery("#phone").validate({
                    expression: "if (VAL.match(/^[9][0-9]{9}$/)) return true; else return false;",
                    message: "Should be a valid Mobile Number"
                });
				
				jQuery("#phone2").validate({
                    expression: "if (VAL.match(/^[9][0-9]{9}$/)) return true; else return false;",
                    message: "Should be a valid Mobile Number"
                });
				/* jQuery("#datepicker").validate({
                    expression: "if (!isValidDate(parseInt(VAL.split('-')[2]), parseInt(VAL.split('-')[0]), parseInt(VAL.split('-')[1]))) return false; else return true;",
                    message: "Please enter a valid Date"
                });*/
            });
            /* ]]> */
        </script>
</body>
</html>
