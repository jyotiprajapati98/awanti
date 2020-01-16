<?php

include("conectdb.php");
//$name=$_REQUEST['name'];
$uid=$_REQUEST['sno'];

mysql_query("delete from event where sno=$uid",$con);

header("location:showevent.php");


?>