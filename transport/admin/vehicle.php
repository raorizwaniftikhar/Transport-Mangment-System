<?php 
include("themes/header.php"); 
require("db/dbcon.php");
?>
<br />

<div class="container">

<div class="titleheader">
<h3>Vehicle Registration</h3>
</div>

<div class="outer-container">
<p class="text">This module has been created to to manage Vehicle Registration</p>
<?php if(isset($_GET['msg2'])=="ssuccess"){ ?>
<div class="n_ok"><p>Vehicle Saved Successfully.</p></div>
<?php }?>

<?php if(isset($_GET['msg3'])=="usuccess"){ ?>
<div class="n_ok"><p>Vehicle Updated Successfully.</p></div>
<?php }?>

<?php if(isset($_GET['mssg'])=="dsuccess"){ ?>
<div class="n_ok"><p>Vehicle Deleted Successfully.</p></div>
<?php }?>


<table class="listing" style="width:950px;">
<tr>
<th>Sr.No</th>
<th>Vehicle Number </th>
<th>Vehicle Model</th>
<th>Class Vehicle</th>
<th>Engine Number</th>
<th>Chasis Number</th>
<th>Fitness Upto</th>
<th>Registration Date</th>
<th>Action</th>
</tr>
<?php
$max = 10;
				/******Pagination Query*****/	
if(isset($_GET['pg'])){
$p = $_GET['pg'];
}
else
{
$p = 1;
}
$limit = ($p - 1) * $max;
$prev = $p - 1;
$next = $p + 1;
$limits = (int)($p - 1) * $max;

$q1="select * from vehicle limit " . $limits . "," . $max;
$totalres2 = mysql_query( "SELECT count(*) as tot FROM vehicle" );
$totalres= mysql_fetch_array($totalres2);
$totalres=$totalres['tot'];
$totalposts = ceil($totalres / $max);
$lpm1 = $totalposts - 1;

$result=mysql_query($q1);
if(mysql_num_rows($result)>0)
{
$count=1;
while($row=mysql_fetch_array($result))
{
?>
<tr>
<td  align="center"><?php echo $count++; ?></td>
<td><?php echo $row['vehicle_no'];?></td>
<td><?php echo $row['vehicle_model'];?></td>
<td><?php echo $row['class_vehicle'];?></td>
<td><?php echo $row['engine_no'];?></td>
<td><?php echo $row['chasis_no'];?></td>
<td><?php echo $row['fitness_upto'];?></td>
<td><?php echo $row['reg_date'];?></td>
<td>
<a href="view_vehicle.php?id=<?php echo $row['id']; ?>" title="View"><img src="images/view.png" alt="View"></a>&nbsp;
<a href="edit_vehicle.php?id=<?php echo $row['id']; ?>" title="Edit"><img src="images/edit.png" alt="EDIT"></a>&nbsp;
<a href="del_vehicle.php?id=<?php echo $row['id'];?>" title="Delete"><img src="images/delete.png" alt="DELETE"></a>
</td>
</tr>

<?php }$count++;}else{?>

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
</tr>
<?php } ?>


</table>

<div class="pagination">
<?php include("themes/pagination.php"); ?>
</div>

<a href="add_vehicle.php"><input type="button" name="sumit" class="add" value="Add New Vehicle" ></a>

</div>

</div>

<br />
<br />

<?php include("themes/footer.php"); ?>