<?php
session_start();

$id=$_REQUEST['id'];
$uname=$_REQUEST['class'];
$d=$_REQUEST['sit'];
//$c=$_REQUEST['cls'];
$f=$_REQUEST['fee'];

$p=$_REQUEST['avisit'];

include("conectdb.php");

$q=mysql_query("UPDATE detail SET class='$uname',sit='$d',fee='$f', avisit='$p' WHERE sno='$id'",$con)or die("Query Error");
//echo"jjhbk,hj";
//mysql_close($con);
header("location:datadetail.php");

?>
<title>jstudy.com</title>