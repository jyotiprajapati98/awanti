
<?php
include("headsimple.php");
?>
<style>
#table
{
	margin-top:50px;
	text-decoration:none;
	color:#F00;
}
</style>
<div id="table">
<center><table border="1" datapagesize="1000" bgcolor="#FFFFCC" cellspacing="5" cellpadding="5">
<tr>
<th><font color="#FF0000">S No.</th>
<th><font color="#FF0000">Class</th>
<th><font color="#FF0000">Total seats</th>
<th><font color="#FF0000">Fees</th>
<TH><font color="#FF0000">Available Seats</TH>

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
	</tr>";
}
?>
</table></center>
</div>