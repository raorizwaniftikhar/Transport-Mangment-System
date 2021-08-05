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
<a href="driver.php"><input type="button" name="sumit" class="add" value="<< Back" ></a>
<br />
<table class="listing" style="width:950px;">
<?php
$q1="select * from drivers where id=".$id;
$result2=mysql_query($q1);
if(mysql_num_rows($result2)>0)
{
$row=mysql_fetch_array($result2);
?>
<tr>
<th>Driver Image</th>
<td><img src="../drivers/<?php echo $row['image'];?>" alt="" style="width:200px;"  /></td>
</tr>
<tr>
<th>Name</th>
<td><?php echo $row['finame'];?>&nbsp;<?php echo $row['lname'];?></td>
</tr>
<tr>
<th>Father Name</th>
<td><?php echo $row['fname'];?></td>
</tr>
<tr>
<th>CNIC</th>
<td><img src="../cnic/<?php echo $row['cnic'];?>" alt=""  /></td>
</tr>
<tr>
<th>Phone</th>
<td><?php echo $row['phone1'];?> <br /> <?php echo $row['phone2'];?></td>
</tr>
<tr>
<th>Address</th>
<td><?php echo $row['address'];?></td>
</tr>
<tr>
<th>Labour No</th>
<td><?php echo $row['lab_no'];?></td>
</tr>
<tr>
<th>Labour Expire Date</th>
<td><?php echo $row['lab_exdate']; ?></td>
</tr>
<tr>
<th>Passport</th>
<td><img src="../drivers/<?php echo $row['pass_no']; ?>" alt="Passport Image" style="width:300px;" /></td>
</tr>

<tr>
<th>Passport Expire Date</th>
<td><?php echo $row['pass_exdate']; ?></td>
</tr>

<tr>
<th>Visa</th>
<td><img src="../drivers/<?php echo $row['visa_no']; ?>" alt="Visa Image" style="width:300px;"/></td>
</tr>
<tr>
<th>Visa Expire Date</th>
<td><?php echo $row['visa_exdate']; ?> </td>
</tr>
<tr>
<th>Liscense</th>
<td><img src="../drivers/<?php echo $row['lis_no']; ?>" alt="Liscense Image" style="width:300px;"/></td>
</tr>
<tr>
<th>Liscense Expire Date</th>
<td><?php echo $row['lis_exdate']; ?> </td>
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

<a href="driver.php"><input type="button" name="sumit" class="add" value="<< Back" ></a>

</div>

</div>

<br />
<br />

<?php include("themes/footer.php"); ?>