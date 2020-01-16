<?php

include("conectdb.php");
//$name=$_REQUEST['name'];
$uid=$_REQUEST['sno'];

mysql_query("delete from staff where sno=$uid",$con);

header("location:see.php");


?>