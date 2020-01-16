<?php
include("conectdb.php");
$a=$_REQUEST['sno'];


mysql_query("delete from event where s.no='$a'",$con);

header("location:showevent.php");
?>