<?php
include("AAA.php");
?>
<style>
#table
{
	margin-top:0px;
	text-decoration:none;
	color:#F00;
}
</style>
<div id="table">
<center><table border="1" datapagesize="1000" bgcolor="#FFFFCC">
<tr>
<th><font color="#FF0000">S No.</th>
<th><font color="#FF0000">Name</th>
<th><font color="#FF0000">Father name</th>
<th><font color="#FF0000">Mother name</th>
<TH><font color="#FF0000">Address</TH>
<th><font color="#FF0000">Qualification</th>
<th><font color="#FF0000">Contact</th>
<th><font color="#FF0000">Email</th>

<th><font color="#FF0000">Joining Date</th>
<th><font color="#FF0000">Image</th>
<th><font color="#FF0000">Edit</th>
<th><font color="#FF0000">Delete</th>
</tr>

<?php
$con=mysql_connect("localhost","root","");

mysql_select_db("awanti",$con);

$qu=mysql_query("select * from staff",$con) or die("Query Error");
$count=0;
while($row=mysql_fetch_array($qu))
{
	$count++;
	$id=$row['sno'];
	$name=$row['tname'];
	$fname=$row['fname'];
	$mname=$row['mname'];
	$add=$row['address'];
	$q=$row['quali'];
	$cont=$row['contact'];
	$co=$row['email'];
	
	$date=$row['date'];
	$img=$row['image'];
	echo"<tr>
	<td>$count</td>
	<td>$name</td>
	<td>$fname</td>
	<td>$mname</td>
	<td>$add</td>
	<td>$q</td>
	<td>$cont</td>
	<td>$co</td>
	
	<td>$date</td>
	<td><img src='sphoto/$img' height='100' width='100'></td>
     
	 <td><a href='editstaff.php?sno=$id'>Edit</a></td>
	<th><a href='delstaff.php?sno=$id'>Delete</a></th>

	</tr>";
}
?>
</table></center>
</div>