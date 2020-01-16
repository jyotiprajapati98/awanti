<?php
include("AAA.PHP");
?>
<style>
#table
{
	margin-top:20px;
	text-decoration:none;
	color:#F00;
}
</style>
<div id="table">
<center><table border="1" datapagesize="1000" bgcolor="#FFFFCC">
<tr>
<th><font color="#FF0000">S No.</th>
<th><font color="#FF0000">Class</th>
<th><font color="#FF0000">Total Sheets</th>
<th><font color="#FF0000">Fees</th>
<TH><font color="#FF0000">Available Sheet</TH>

<TH><font color="#FF0000">Edit</TH>
<TH><font color="#FF0000">Delete</TH>

</tr>

<?php
$con=mysql_connect("localhost","root","");

mysql_select_db("awanti",$con);

$qu=mysql_query("select * from detail",$con) or die("Query Error");
$count=0;
while($row=mysql_fetch_array($qu))
{
	$count++;
	$id=$row['sno'];
	$name=$row['class'];
	$fname=$row['sit'];
	$mname=$row['fee'];
	$add=$row['avisit'];
	echo"<tr>
	<td>$count</td>
	<td>$name</td>
	<td>$fname</td>
	<td>$mname</td>
	<td>$add</td>
	<th><a href='delcomment.php?id=$id'>Edit</a></th>
	<th><a href='deldetail.php?id=$id'>Delete</a></th>
	</tr>";
}
?>
</table></center>
</div>