<?php

include("conectdb.php");
//$name=$_REQUEST['name'];
$uid=$_REQUEST['id'];

mysql_query("delete from kg2 where id=$uid",$con);

header("location:adminkg2dt.php");


?>