<body>
<?php
include("headsimple2.php");
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
<th><font color="#FF0000">Class</th>
<th><font color="#FF0000">Percent</th>

<th><font color="#FF0000">Image</th>
<!--<th>Edit</th>
<th>Delete</th>-->
</tr>

<?php
$con=mysql_connect("localhost","root","");

mysql_select_db("awanti",$con);

$qu=mysql_query("select * from brightstd",$con) or die("Query Error");

$count=0;
while($row=mysql_fetch_array($qu))
{
	$count++;
	$id=$row['id'];
	$name=$row['name'];
			$cont=$row['class'];
	$add=$row['percent'];
	
	$img=$row['img'];
	echo"<tr>
	<td>$count</td>
	<td>$name</td>
	
	<td>$cont</td>
	<td>$add</td>
	
	
	<td><img src='sphoto/$img' height='100' width='100'></td>

	</tr>";
}
?>
</table></center>
</div></body>