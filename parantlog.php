<body bgcolor="#999999">
<?php
$id=$_REQUEST['id'];


$con=mysql_connect("localhost","root","");

mysql_select_db("awanti",$con);
$q=mysql_query("select * from cls where id=$id",$con)or die("Query Error");



$count=0;
while($row=mysql_fetch_array($q))

//echo $id;
{
	$img=$row['pic'];
	//$status=$row['status'];
	$name=$row['name'];
	//$address=$row['address'];
	//$email=$row['email'];;
	//$contect=$row['mobile'];
	//$dob=$row['dob'];
//	echo $pic;
echo "
	<img src='sphoto/$img' height='200' width='200'>	

";



?>

<table border="1">
<!--<tr>
<td>Status</td><td></td></tr>-->
<tr>
<td>Name</td><td><?php echo $name; ?></td></tr>
<?php
}

?></table>
	
	</div>


</body>
</html>

