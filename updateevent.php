
<br><br><br><br>

<?php
session_start();
$id=$_REQUEST['id'];
$uname=$_REQUEST['name'];
$d=$_REQUEST['date'];
$c=$_REQUEST['des'];
//$f=$_REQUEST['pic'];

include("conectdb.php");

$q=mysql_query("UPDATE event SET evname='$uname',evdate='$d',evdesc='$c' WHERE sno='$id'",$con)or die("Query Error");


header("location:eventP3.php");

?>
<title>jstudy.com</title>