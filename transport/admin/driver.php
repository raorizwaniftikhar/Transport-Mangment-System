<?php 
include("themes/header.php"); 
require("db/dbcon.php");
?>
<br />

<div class="container">

<div class="titleheader">
<h3>Drivers Registration</h3>
</div>

<div class="outer-container">
<p class="text">This module has been created to to manage Driver Registration</p>

<?php if(isset($_GET['msg2'])=="ssuccess"){ ?>
<div class="n_ok"><p>Driver Saved Successfully.</p></div>
<?php }?>

<?php if(isset($_GET['msg3'])=="usuccess"){ ?>
<div class="n_ok"><p>Driver Updated Successfully.</p></div>
<?php }?>

<?php if(isset($_GET['mssg'])=="dsuccess"){ ?>
<div class="n_ok"><p>Driver Deleted Successfully.</p></div>
<?php }?>


<table class="listing" style="width:950px;">
<tr>
<th>Sr.No</th>
<th>Name</th>
<th>CNIC</th>
<th>Phone</th>
<th>Address</th>
<th>Labour No</th>
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
				
$q1="select * from drivers limit " . $limits . "," . $max;
$totalres2 = mysql_query( "SELECT count(*) as tot FROM drivers" );
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
<td><?php echo $row['finame'];?>&nbsp;<?php echo $row['lname'];?></td>
<td><?php echo $row['cnic'];?></td>
<td><?php echo $row['phone1'];?> <br /> <?php echo $row['phone2'];?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['lab_no'];?></td>
<td>
<a href="edit_driver.php?id=<?php echo $row['id']; ?>" title="Edit"><img src="images/edit.png" alt="EDIT"></a>&nbsp;
<a href="del_driver.php?id=<?php echo $row['id'];?>" title="Delete"><img src="images/delete.png" alt="DELETE"></a>&nbsp;
<a href="view_driver.php?id=<?php echo $row['id'];?>" title="view"><img src="images/view.png" alt="EDIT"></a>
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
<td></td>
</tr>
<?php } ?>


</table>

<div class="pagination">
<?php include("themes/pagination.php"); ?>
</div>

<a href="add_driver.php"><input type="button" name="sumit" class="add" value="Add New Driver" ></a>

</div>

</div>

<br />
<br />

<?php include("themes/footer.php"); ?>