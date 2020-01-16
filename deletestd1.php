<?php

include("conectdb.php");
//$name=$_REQUEST['name'];
$uid=$_REQUEST['id'];

mysql_query("delete from cls1 where id=$uid",$con);

//echo"hgvjgjgjhj";

header("location:adminclass1.php");

?>