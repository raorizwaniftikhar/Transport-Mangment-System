<?php 
include("admin/db/dbcon.php");
 ?>
 
 <div class="client-main">
 <?php
 
$q1=mysql_query("select * from clients order by id DESC limit 0,5");

while($row=mysql_fetch_array($q1))
{
 ?>
 <div class="client">
 <a href="<?php echo $row['url']; ?>" title="<?php echo $row['name']; ?>" target="_blank"><img src="clients/<?php echo $row['company_logo']; ?>" alt="" style="height: 150px;width: 200px;"  /></a>
 </div>
 
 <?php } ?>
 
 </div>