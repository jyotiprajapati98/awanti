
<?php
include("contectdb.php");
$sno=$_REQUEST['sno'];

$a=$_REQUEST['name'];
$b=$_REQUEST['date'];
$c=$_REQUEST['des'];
$d=$_FILES['pic']['name'];


mysql_query("update event set name='$a',date='$b',des='$c',image='$d' where sno='$s.no'",$con);
header("location:showevent.php");


?>