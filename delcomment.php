<?php

include("conectdb.php");
//$name=$_REQUEST['name'];
$id=$_REQUEST['id'];

mysql_query("delete from feedback where id=$id",$con);

header("location:feedback.php");


?>