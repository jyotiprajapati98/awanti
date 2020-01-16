<?php

include("conectdb.php");
//$name=$_REQUEST['name'];
$id=$_REQUEST['id'];

mysql_query("delete from brightstd where id=$id",$con);

header("location:brighthome3.php");


?>