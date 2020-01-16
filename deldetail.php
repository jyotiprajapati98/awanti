<?php

include("conectdb.php");
//$name=$_REQUEST['name'];
$uid=$_REQUEST['sno'];

mysql_query("delete from detail where sno=$uid",$con);

header("location:datadetail.php");


?>