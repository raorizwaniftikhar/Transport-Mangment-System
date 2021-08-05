<?php 
include("themes/header.php");
require("db/dbcon.php");
 ?>
<br />


<div class="container">

<div class="titleheader">
<h3>Driver Accounts</h3>
</div>

<div class="outer-container">
<p class="text">This module has been created to to manage Driver Accounts</p>
<?php if(isset($_GET['msg2'])=="ssuccess"){ ?>
<div class="n_ok"><p>Driver Account Saved Successfully.</p></div>
<?php }?>

<table class="listing" style="width:950px;">
<tr>
<th>Sr.No</th>
<th>Driver Name</th>
<th>Vehicle Model</th>
<th>Vehicle Number</th>
<!--<th>Total Amount</th>-->
<th>Amount Add</th>
<th>Remaining Amount</th>
<th>Update Account</th>
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

$q1="select * from accounts limit " . $limits . "," . $max;
$totalres2 = mysql_query( "SELECT count(*) as tot FROM accounts" );
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
$driver=$row['driver_id'];
$q2=mysql_query("select * from drivers where id=".$driver);
$drow=mysql_fetch_array($q2);
$q3=mysql_query("select * from allocation where driver=".$driver);
$arow=mysql_fetch_array($q3)

?>
<tr>
<td align="center"><?php echo $count++; ?></td>
<td><?php echo $drow['finame']; ?>&nbsp;<?php echo $drow['lname']; ?></td>
<td><?php echo $arow['vehicle_model']; ?></td>
<td><?php echo $arow['vehicle']; ?></td>
<!--<td><?php //echo $row['total_amount']; ?></td>-->
<td><?php echo $row['add_cash']; ?></td>
<td><?php echo $row['total_amount']; ?></td>
<td>
<a href="upaccount.php?id=<?php echo $row['id']; ?>&n=<?php echo $drow['finame']; ?> <?php echo $drow['lname']; ?>" title="Edit Account"><img src="images/edit.png" alt="Edit Account" /></a>
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
</tr>
<?php } ?>
</table>

<div class="pagination">
<?php include("themes/pagination.php"); ?>
</div>


<a href="add_daccount.php"><input type="button" name="sumit" class="add" value="Add New Driver Account" ></a>



</div>

</div>








<br />
<br />

<?php include("themes/footer.php"); ?>