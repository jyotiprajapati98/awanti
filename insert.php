<?php
$name=$_REQUEST['txtname'];
$email=$_REQUEST['txtEmail'];

$mobile=$_REQUEST['mobile_no'];


$pass=$_REQUEST['pass'];

echo $name."<br>";
echo $email."<br>";
echo $mobile."<br>";

echo $pass."<br>";

$connect=mysql_connect("localhost","root","");
mysql_select_db("awanti",$connect);

mysql_query("insert into register(name,email,mobile,pass) values ('$name','$email','$mobile','$pass')",$connect);
echo"student has been registered";
?>