<?php

include("conectdb.php");
//$name=$_REQUEST['name'];
$uid=$_REQUEST['sno'];

mysql_query("delete from principal where sno=$uid",$con);

header("location:princihome3.php");


?>