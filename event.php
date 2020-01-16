<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<style>
table
{
	text-decoration:none;
	color:#FFF;
	
}
</style>

<body>
<center>
<table border="1" bgcolor="#993333" cellpadding="15" cellspacing="15" cols="8">
<tr><th>Event Name
</th>
<th>Date

</th>

<th>Description

</th>
<th>Image</th>
</tr>
</table>
</center>
<?php
$evname=$_REQUEST['name'];
$date=$_REQUEST['date'];

$desc=$_REQUEST['event'];

$pic=$_FILES['picname'];
$pname=trim($pic['name']);

//echo $name;


move_uploaded_file($pic['tmp_name'],"eventpic\\".$pname);

/*
$pass=$_REQUEST['pass'];*/
$connect=mysql_connect("localhost","root","");
mysql_select_db("awanti",$connect);

mysql_query("insert into event(evname,date,desc,eventimg) values ('$evname','$date','$desc','$pname')",$connect);
echo"event";
?>
</body>
</html>
