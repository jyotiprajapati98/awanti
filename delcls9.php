<?php

include("conectdb.php");
//$name=$_REQUEST['name'];
$uid=$_REQUEST['id'];

mysql_query("delete from class9 where id=$uid",$con);

header("location:admincls9.php");


?>