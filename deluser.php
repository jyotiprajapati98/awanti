<?php

include("conectdb.php");
//$name=$_REQUEST['name'];
$uid=$_REQUEST['id'];

mysql_query("delete from user where id=$uid",$con);

header("location:USERS.php");


?>