<?php
$a=$_REQUEST["uname"];

include("conectdb.php");
mysql_query("insert into register(uname) values ('$a')");
echo"ahcjadsfjk";
?>