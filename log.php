<?php
$name=$_REQUEST['uname'];
$email=$_REQUEST['mail'];
$mobile=$_REQUEST['mob'];
$pass=$_REQUEST['passw'];

$c=mysql_connect("localhost","root","");
mysql_select_db("awanti",$c);
mysql_query("insert into register(uname,email,mobile,pass) values ('$name','email','mobile','pass')",$c);

header("location:home.html")
?>