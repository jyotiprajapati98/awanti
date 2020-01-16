<?php

include("conectdb.php");
//$name=$_REQUEST['name'];
$uid=$_REQUEST['id'];

mysql_query("delete from class6 where id=$uid",$con);

header("location:admincls6.php");


?>