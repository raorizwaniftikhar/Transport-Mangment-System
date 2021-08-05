<?php 
include("themes/header.php"); 
require("db/dbcon.php");
if(is_numeric($_GET['id']))
{
$id=$_GET['id'];
}
else
{
$id=0;
}
?>
<br />

<div class="container">

<div class="titleheader">
<h3>View Driver Profile</h3>
</div>

<div class="outer-container">
<p class="text">This module has been created to view Drivers Profile</p>
<a href="vehicle.php"><input type="button" name="sumit" class="add" value="<< Back" ></a>
<br />
<table class="listing" style="width:950px;">
<?php
$q1="select * from vehicle where id=".$id;
$result2=mysql_query($q1);
if(mysql_num_rows($result2)>0)
{
$row=mysql_fetch_array($result2);
?>
<tr>
<th>Vehicle Image</th>
<td><img src="../vehicles/<?php echo $row['image'];?>" alt="" style="width:200px;"  /></td>
</tr>
<tr>
<th>Vehicle Number</th>
<td><?php echo $row['vehicle_no'];?></td>
</tr>
<tr>
<th>Vehicle Model</th>
<td><?php echo $row['vehicle_model'];?></td>
</tr>
<tr>
<th>Vehicle Class</th>
<td><?php echo $row['class_vehicle'];?></td>
</tr>
<tr>
<th>Color</th>
<td><?php echo $row['color'];?></td>
</tr>
<tr>
<th>Engine Number</th>
<td><?php echo $row['engine_no'];?></td>
</tr>
<tr>
<th>Chasis Number</th>
<td><?php echo $row['chasis_no'];?></td>
</tr>
<tr>
<th>Fitness Upto</th>
<td><?php echo $row['fitness_upto']; ?></td>
</tr>
<tr>
<th>Registration date</th>
<td><?php echo $row['reg_date']; ?></td>
</tr>

<tr>
<th>Waqalaa</th>
<td><img src="../waqala/<?php echo $row['waqala']; ?>" alt="Waqala Image" style="width:300px;"/></td>
</tr>
<tr>
<th>Registration Card</th>
<td><img src="../regcard/<?php echo $row['regcard']; ?>" alt="Registration card Image" style="width:300px;"/> </td>
</tr>
<?php }else{?>

<tr>
<td align="center"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>Sorry No Record Found !</td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<?php } ?>


</table>

<div class="pagination">

</div>

<a href="vehicle.php"><input type="button" name="sumit" class="add" value="<< Back" ></a>

</div>

</div>

<br />
<br />

<?php include("themes/footer.php"); ?>