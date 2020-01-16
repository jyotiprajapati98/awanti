<?php
$email=$_REQUEST['eemail'];

//echo $email;
include("db_connection.php");

$q=mysql_query("select * from login where email='$email'",$con);

if(mysql_num_rows($q))
{
	while($row=mysql_fetch_array($q))
{
	$pass=$row['upass'];
	
	//echo $pass;
	echo "
	<form action='Mailsubmit.php' method='post'>
	
	<input type='hidden' name='emailid' value='$email'>
	
	<input type='hidden' name='pass' value='$pass'>
	
	<input type='submit' value='Send Password to emailId'>
	
	
	</form>
	
	
	";
	
}
}
else
{
	echo "no data";
}
//se

?>