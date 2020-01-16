<style>
#jyoti
{
	margin-top:20px;
	text-decoration:none;
	color:#F00;

}
</style>

<?php
include("headsimple2.php");
?>
<body>
<div id="jyoti">

<div id="table">
<center><table border="1" datapagesize="1000" bgcolor="#FFFFCC" cellpadding="8" cellspacing="6">
<tr>
<th><font color="#FF0000">S No.</th>
<th><font color="#FF0000">Name of Notice</th>
<th><font color="#FF0000">Date</th>
<th><font color="#FF0000">Description</th>

</tr>

<?php
$con=mysql_connect("localhost","root","");

mysql_select_db("awanti",$con);

$qu=mysql_query("select * from event",$con) or die("Query Error");

while($row=mysql_fetch_array($qu))
{
	$id=$row['sno'];
	$name=$row['evname'];
	$fname=$row['evdate'];
	$mname=$row['evdesc'];

	echo"<tr>
	<td>$id</td>
	<td>$name</td>
	<td>$fname</td>
	<td>$mname</td>
	
	
	</tr>";
}
?>
</table></center>

</body>