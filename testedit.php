<?php
$connect=mysql_connect("localhost","root","");
mysql_select_db("awanti",$connect);

$id=$_REQUEST['id'];

$q=mysql_query("select * from 1class where id=$id",$connect);

while($row=mysql_fetch_array($q))
{
	$name=$row['name'];
	$fname=$row['fname'];
	$mname=$row['mname'];
	
	
	echo "
	
	<form action='update.php' method='get'>
	<input type='text' name='name' value='$name'><br><br>
	<input type='text' name='fname' value='$fname'><br><br>
	<input type='text' name='mname' value='$mname'><br><br>
	
	<input type='hidden' name='id' value='$id'>
	<input type='submit'>
	</form>
		";

}
?>
