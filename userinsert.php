<?php
$name=$_REQUEST['uname'];
$email=$_REQUEST['address'];
$mobile=$_REQUEST['mob'];
$cls=$_REQUEST['class'];
$pass=$_REQUEST['pass'];

$c=mysql_connect("localhost","root","");
mysql_select_db("awanti",$c);
mysql_query("insert into user(uname,address,mobile,class,pass) values ('$name','$email','$mobile','$cls','$pass')",$c);

echo"jfhdjgh";
//header("location:loginu.php")
?>