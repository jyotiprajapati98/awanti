<style>
#jyoti
{
	margin-top:10px;
	text-decoration:none;
	color:#F00;

}
</style>

<?php
include("AAA.php");
?>
<body>
<div id="jyoti">

<div id="table">
<center><table border="1" datapagesize="1000" bgcolor="#FFFFCC" cellpadding="8" cellspacing="2">
<tr>
<th><font color="#FF0000">S.No.</th>
<th><font color="#FF0000">Notice Name</th>
<th><font color="#FF0000">Notice Date</th>
<th><font color="#FF0000">Description</th>
<th><font color="#FF0000">Edit</th>
<th><font color="#FF0000">Delete</th>

</tr>

<?php
$con=mysql_connect("localhost","root","");

mysql_select_db("awanti",$con);

$qu=mysql_query("select * from event",$con) or die("Query Error");
$count=0;
while($row=mysql_fetch_array($qu))
{
	$count++;
	$id=$row['sno'];
	$name=$row['evname'];
	$fname=$row['evdate'];
	$mname=$row['evdesc'];

	//$img=$row['image'];
	echo"<tr>
	<td>$count</td>
	<td>$name</td>
	<td>$fname</td>
	<td>$mname</td>
	
	<td><a href='edit.php?sno=$id'>Edit</a></td>
	<th><a href='delevent.php?sno=$id'>Delete</a></th>


	</tr>";
}
?>
</table></center>

</body>