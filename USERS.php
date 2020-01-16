<?php
include("AAA.php");
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
<th><font color="#FF0000">S.No.</th>
<th><font color="#FF0000">Father Name</th>
<th><font color="#FF0000">Address</th>
<th><font color="#FF0000">Number</th>

<TH><font color="#FF0000">Code</TH>
<TH><font color="#FF0000">Delete</TH>


</tr>

<?php
$con=mysql_connect("localhost","root","");

mysql_select_db("awanti",$con);

$qu=mysql_query("select * from user",$con) or die("Query Error");
$count=0;
while($row=mysql_fetch_array($qu))
{
	$count++;
	$id=$row['id'];
	$name=$row['uname'];
	$fname=$row['address'];
	$con=$row['mobile'];
	
	$add=$row['pass'];
	//$q=$row['quali'];
	//$cont=$row['contact'];
	//$date=$row['date'];
	//$img=$row['img'];
	echo"<tr>
	<td>$count</td>
	<td>$name</td>
	<td>$fname</td>
	<td>$con</td>
	
	<td>$add</td>
     <th><a href='deluser.php?id=$id'>Delete</a></th>
    
	</tr>";
}
?>
</table></center>
</div>