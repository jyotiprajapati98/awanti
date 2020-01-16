
<br><br><br><br>

<?php
session_start();
$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$d=$_REQUEST['add'];
//$c=$_REQUEST[''];
$f=$_REQUEST['quali'];

$p=$_REQUEST['work'];
$r=$_REQUEST['date'];
$rn=$_REQUEST['num'];
$em=$_REQUEST['mail'];


include("conectdb.php");

$q=mysql_query("UPDATE principal SET tname='$name',address='$d',quali='$f',working='$p', date='$r',contact='$rn',email='$em'  WHERE sno='$id'",$con)or die("Query Error");
//echo"jjhbk,hj";
//mysql_close($con);
header("location:princihome3.php");

?>
<title>jstudy.com</title>