<?php 
include("themes/header.php"); 
require("db/dbcon.php");
?>
<br />

<div class="container">

<div class="titleheader">
<h3>Drivers Allocation</h3>
</div>

<div class="outer-container">
<p class="text">This module has been created to Vehicles Allocation</p>

<?php if(isset($_GET['msg2'])=="ssuccess"){ ?>
<div class="n_ok"><p>Vehicle Allocated Successfully.</p></div>
<?php }?>

<?php if(isset($_GET['mssg'])=="dsuccess"){ ?>
<div class="n_ok"><p>Vehicle Allocation Deleted Successfully.</p></div>
<?php }?>


<table class="listing" style="width:950px;">
<tr>
<th>Sr.No</th>
<th>Vehicle Number</th>
<th>Vehicle Model</th>
<th>Driver Name</th>
<th>Allocation Date</th>
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
				
$q1="select * from allocation limit " . $limits . "," . $max;
$totalres2 = mysql_query( "SELECT count(*) as tot FROM allocation" );
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
$d=$row['driver'];
$sq=mysql_query("select * from drivers where id=".$d);
$drow=mysql_fetch_array($sq);
?>
<tr>
<td  align="center"><?php echo $count++; ?></td>
<td><?php echo $row['vehicle'];?></td>
<td><?php echo $row['vehicle_model'];?></td>
<td><?php echo $drow['finame'];?>&nbsp;<?php echo $drow['lname'];?></td>
<td><?php echo $row['date'];?></td>
<td>
<a href="del_allocation.php?id=<?php echo $row['id'];?>" title="Delete"><img src="images/delete.png" alt="DELETE"></a>&nbsp;
</td>
</tr>

<?php }$count++;}else{?>

<tr>
<td align="center"></td>
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

<a href="allocation.php"><input type="button" name="sumit" class="add" value="Add New Allocation" ></a>

</div>

</div>

<br />
<br />

<?php include("themes/footer.php"); ?>