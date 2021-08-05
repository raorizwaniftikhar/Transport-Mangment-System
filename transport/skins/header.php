<?php
$page=$_SERVER['REQUEST_URI'];
$page=str_replace("/transport/","",$page);
$parts=explode('/',$page);
//print_r($parts);
$page=$parts[0];
$parts2=explode('.',$page);
//print_r($parts2);
$apage=$parts2[0];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--<script src="http://cdn.spotflux.com/service/partners/">
</script><script type="text/javascript" src="http://cdn.spotflux.com/service/launcher/partner.js"></script>
--><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Najmat Al - Rashideya</title>
<link rel="shortcut icon" href="images/favicon.ico" />
<link href="css/bestline-style.css" rel="stylesheet" type="text/css" />
<!--menu-script -->
<link href="css/menu-style.css" rel="stylesheet" type="text/css" />
<script src="js/jequery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {	
	$('#nav li').hover(function() {
		$('ul', this).slideDown(200);
		$(this).children('a:first').addClass("hov");
	}, function() {
		$('ul', this).slideUp(100);
		$(this).children('a:first').removeClass("hov");		
	});
});
</script>


<!--sliderscripts -->
<link href="css/skdslider.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.js"></script>
<script src="js/skdslider.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
			jQuery('#banner').skdslider({'delay':5000, 'fadeSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoStart':true});
});
</script>

</head>

<body>
<!--top-main-->
<div class="top-main">
<!--top-inner-->
<div class="top-inner">
<div class="bestline"><a href="index.php" title="Najmat Al Rashdiya Transport">Najmat Al Rashdiya</a></div>

<!--topinfo-->
<div class="topinfo">
<div class="fone-email">
<strong>Phone: 04 - 2511682<br /></strong><br /> <strong>Email: info@majmatalrashdiya.com</strong></div>
<img style="padding-top: 0px;" src="images/best-line-cargo-land-transport-company-dubai.png" alt="best-line-cargo-land-transport-company-dubai" width="100" height="100" /><br />

</div>
<!--topinfo-->

</div>
<!--/top-inner-->
</div>
<!--/top-main-->




<!--menuholder-->
<div id="menuholder">
<div id="menu">
<div class="home"><a id="<?php if($apage=="index" || $apage==""){echo "current";} ?>" href="index.php?p=index"><span>Home</span></a></div>
<ul id="nav">
<li >
<a href="page.php?id=1&p=about" class='menulink' id="<?php if($_GET['p']=="about"){echo "current";} ?>"    target='_self' >About Us</a>
<ul>
<li><a href="page.php?id=6&p=profile" class='sub' id="<?php if($_GET['p']=="profile"){echo "current";} ?>"   target='_self'>Profile</a>
<li><a href="page.php?id=7&p=quality" class='sub' id="<?php if($_GET['p']=="quality"){echo "current";} ?>"   target='_self'>quality policy</a>
</ul>
</li>
<li><a href="page.php?id=8&p=najmat" class='sub' id="<?php if($_GET['p']=="najmat"){echo "current";} ?>"   target='_self'>Why Najmat Cargo?</a>
<li><a href="page.php?id=5&p=do" class='sub'  id="<?php if($_GET['p']=="do"){echo "current";} ?>"  target='_self'>What we do?</a>
<li ><a href="page.php?id=9&p=services" class='menulink' id="<?php if($_GET['p']=="services"){echo "current";} ?>"    target='_self' >Services</a>
<ul>
<li>
<a href="page.php?id=10&p=clearning" class='sub'   target='_self'>Clearing</a><li><a href="page.php?id=11&p=forward" class='sub'   target='_self'>Forwarding</a><li><a href="page.php?id=12&p=cargo" class='sub'   target='_self'>Cargo Movers</a><li><a href="page.php?id=13&p=relocation" class='sub'   target='_self'>Relocations</a><li><a href="page.php?id=14&p=consultation" class='sub'   target='_self'>Consultation and Customised Services</a></ul></li><li ><a href="page.php?id=19&p=client" id="<?php if($_GET['p']=="client"){echo "current";} ?>" class='menulink'    target='_self' >Our Clients</a><li ><ul><li><a href="page.php?id=18" class='sub'   target='_self'>FAQ</a><li><a href="page.php?id=17&p=shipping" class='sub'   target='_self'>SHIPPING TERMS</a></ul></li><li ><a href="page.php?id=15&p=enquire" id="<?php if($_GET['p']=="enquire"){echo "current";} ?>" class='menulink'    target='_self' >Enquiry</a><ul>

</ul></li>
<li><a href="page.php?id=16&p=locaion" class='menulink' id="<?php if($_GET['p']=="locaion"){echo "current";} ?>"    target='_self' >Our Locations</a>
</ul>  </div>
</div>
<!--/menuholder-->