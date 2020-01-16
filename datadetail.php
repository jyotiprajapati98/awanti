<?php
include("AAA.php");
?>

<style>
#table
{
	margin-top:px;
	text-decoration:none;
	color:#F00;
}
</style>
<br>
<center><font color="#990033"  size="+2"><a href="adddetail.php" target="a">DETAILS</a></center>
<div id="table">
<center><table border="1" datapagesize="1000" bgcolor="#FFFFCC">
<tr>
<th><font color="#FF0000">S.No.</th>
<th><font color="#FF0000">Class</th>
<th><font color="#FF0000">Total Seats</th>
<th><font color="#FF0000">Fees</th>
<TH><font color="#FF0000">Available Seats</TH>
<th><font color="#FF0000">Edit</th>
<th><font color="#FF0000">Delete</th>
</tr>

<?php
$con=mysql_connect("localhost","root","");

mysql_select_db("awanti",$con);

$qu=mysql_query("select * from detail",$con) or die("Query Error");

$count=0;
while($row=mysql_fetch_array($qu))
{
	$count++;
	//echo"<tr>";
	//echo"<td>";
	//echo $count;
	
	$id=$row['sno'];
	$name=$row['class'];
	$fname=$row['sit'];
	$mname=$row['fee'];
	$add=$row['avisit'];
	echo"<tr>
	
	<td> $count</td>
	
	
	<td>$name</td>
	<td>$fname</td>
	<td>$mname</td>
	<td>$add</td>
	<td><a href='editdetail.php?sno=$id'>Edit</a></td>
	<th><a href='deldetail.php?sno=$id'>Delete</a></th>

	</tr>";
}
?>
</table></center>
</div>