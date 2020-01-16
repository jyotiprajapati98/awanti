<?php

include("conectdb.php");
//$name=$_REQUEST['name'];
$uid=$_REQUEST['id'];

mysql_query("delete from class4 where id=$uid",$con);

header("location:admincls4.php");


?>