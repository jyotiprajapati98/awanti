
<br><br><br><br>

<?php
session_start();
$id=$_REQUEST['id'];
$uname=$_REQUEST['name'];
$d=$_REQUEST['dob'];
$c=$_REQUEST['cls'];
$f=$_REQUEST['fee'];

$p=$_REQUEST['pay'];
$r=$_REQUEST['ref'];
include("conectdb.php");

$q=mysql_query("UPDATE class2 SET name='$uname',dob='$d',class='$c', fee='$f', pay='$p', ref='$r'  WHERE id='$id'",$con)or die("Query Error");
//echo"jjhbk,hj";
//mysql_close($con);
header("location:adminclass2.php");

?>
<title>jstudy.com</title>