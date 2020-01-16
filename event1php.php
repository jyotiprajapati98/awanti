<?php
$name=$_REQUEST['eventname'];


$con=mysql_connect("localhost","root","");
mysql_select_db("awanti",$con);

mysql_query("insert into event(evname) values('$name')",$con);
echo"event";
?>