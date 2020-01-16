<?php
$name=$_REQUEST['t1'];



include("db_con.php");
mysql_query("insert into ac(sname) values ('$name')",$connect);
echo"student has been registered";
?>