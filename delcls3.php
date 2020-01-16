<?php

include("conectdb.php");
//$name=$_REQUEST['name'];
$uid=$_REQUEST['id'];

mysql_query("delete from class3 where id=$uid",$con);

header("location:adminclass3.php");


?>