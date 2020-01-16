
<br><br><br><br>

<?php
session_start();
$id=$_REQUEST['sno'];
$uname=$_REQUEST['name'];
$d=$_REQUEST['add'];
$c=$_REQUEST['quali'];
$f=$_REQUEST['date'];

//$p=$_REQUEST['pay'];
//$r=$_REQUEST['ref'];
include("conectdb.php");

$q=mysql_query("UPDATE staff SET tname='$uname',address='$d', quali='$c',date='$f'  WHERE sno='$id' ",$con)or die("Query Error");
//echo"jjhbk,hj";
//mysql_close($con);
header("location:see.php");

?>
<title>jstudy.com</title>