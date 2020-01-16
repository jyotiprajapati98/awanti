<style>
#jyoti
{
	margin-top:10px;
	text-decoration:none;
	color:#F00;

}
#table
{
	text-decoration:none;
	color:#F00;
}
</style>

<?php
include("headsimple.php");
?>
<body>
<div id="jyoti">

<div id="table">
<center><table border="1" datapagesize="1000" bgcolor="#FFFFCC">
<tr>
<th><font color="#FF0000">S No.</th>
<th><font color="#FF0000">Date</th>

<th><font color="#FF0000">Description</th>
<th><font color="#FF0000">Image</th>

</tr>

<?php
$con=mysql_connect("localhost","root","");

mysql_select_db("awanti",$con);

$qu=mysql_query("select * from gallery",$con) or die("Query Error");
$count=0;

while($row=mysql_fetch_array($qu))
{
	$count++;
	$id=$row['id'];
	$name=$row['fdate'];
	$fname=$row['fdesc'];
	
    
	$img=$row['fimage'];
	// $img = $row['image'];
	//$img=$row['image'];
	echo"<tr>
	<td>$count</td>
	<td>$name</td>
	<td>$fname</td>
	
	
	<td>
	   
		<img src='sphoto/$img' height='150' width='150'></td>
	   

	
	</tr>";
}
?>
</table></center>

</body>