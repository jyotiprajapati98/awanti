<?php

include("conectdb.php");
//$name=$_REQUEST['name'];
$uid=$_REQUEST['id'];

mysql_query("delete from gallery where id=$uid",$con);

header("location:funtionhome3.php");


?>