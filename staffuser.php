<body>
<?php
include("headsimple.php");
?>

<style>
#table
{
	margin-top:20px;
	text-decoration:none;
	color:#F00;
	margin-top:20px;
}
</style>
<div id="table">
<center><table border="1" datapagesize="1000" bgcolor="#FFFFCC" cellpadding="5" cellspacing="5">
<tr>
<th><font color="#FF0000">S.no</th>
<th><font color="#FF0000">Name</th>
<th><font color="#FF0000">Qualification</th>
<!--<th><font color="#FF0000">Contact</th>-->

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
	//$fname=$row['fname'];
	//$mname=$row['mname'];
	//$add=$row['address'];
	$q=$row['quali'];
	//$cont=$row['contact'];
	
	echo"<tr>
	<td>$count</td>
	<td>$name</td>
	<td>$q</td>
	
	
	
	</tr>";
}
?>
</table></center>
</div></body>