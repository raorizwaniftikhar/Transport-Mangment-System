<?php 
include("themes/header.php");
require("db/dbcon.php");
 ?>
<br />


<div class="container">

<div class="titleheader">
<h3>Company Accounts</h3>
</div>

<div class="outer-container">
<p class="text">This module has been created to to manage Company Accounts</p>

<div class="companytotal">
<?php
$qw=mysql_query("SELECT sum(income),sum(expense) FROM caccounts");
$trow=mysql_fetch_array($qw);
?>
<div class="">
<div class="total_income"><strong>Total Income Till Today = </strong><?php echo $trow['sum(income)']; ?></div>
<div class="total_income"><strong>Total Expense Till Today = </strong><?php echo $trow['sum(expense)']; ?></div>
<div class="total_income"><strong>Net Balance Till Today = </strong><?php echo $final = $trow['sum(income)'] - $trow['sum(expense)']; ?></div>
</div>
</div>

<?php if(isset($_GET['msg2'])=="ssuccess"){ ?>
<div class="n_ok"><p>Company Account Saved Successfully.</p></div>
<?php }?>

<table class="listing" style="width:950px;">
<tr>
<th>Sr.No</th>
<th>Income</th>
<th>Expense</th>
<th>Description</th>
<th>Date</th>
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

$q1="select * from caccounts limit " . $limits . "," . $max;
$totalres2 = mysql_query( "SELECT count(*) as tot FROM caccounts" );
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
<td align="center"><?php echo $count++; ?></td>
<td><?php echo $row['income']; ?></td>
<td><?php echo $row['expense']; ?></td>
<td><?php echo substr($row['description'],0,200); ?></td>
<td><?php echo $row['date']; ?></td>
</tr>

<?php }$count++;}else{?>

<tr>
<td align="center"></td>
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
<a href="add_caccount.php"><input type="button" name="sumit" class="add" value="Add New Company Account" ></a>

</div>

</div>








<br />
<br />

<?php include("themes/footer.php"); ?>