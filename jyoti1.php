<?php
include("headadmin.html");
?>
<style>
#table
{
	margin-top:150px;
	text-decoration:none;
	color:#F00;
}
</style>
<div id="table">
<center><table border="1" datapagesize="1000" bgcolor="#FFFFCC">
<tr>
<th><font color="#FF0000">S No.</th>
<th><font color="#FF0000">Class</th>

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
	
	echo"<tr>
	
	<td> $count</td>
	
	
	<td>$name</td>
	
	<td><a href='upset.php?sno=<?php echo $id; ?>'>edit</a></td>
	<th><a href='deldetail.php?sno=$id'>Delete</a></th>

	</tr>";
}
?>
</table></center>
</div>