<?php 
include("skins/header.php"); 
require("admin/db/dbcon.php");
if(is_numeric($_GET['id']))
{
$id=$_GET['id'];
}
else
{
$id=0;
}
$q1=mysql_query("select * from pages where id=".$id);
$row=mysql_fetch_array($q1);
?>

<div id="middle">

<div id="middle-inner">

<h1 class="subtitle"><strong><?php echo $row['page_title']; ?></strong></h1>

<div class="description">
<?php echo $row['page_description']; ?>
</div>


<br />
<br />
</div>
</div>


<?php include("skins/footer.php"); ?>