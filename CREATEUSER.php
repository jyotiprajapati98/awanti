<!doctype html>
<html>
<style>
#now
{
	
}
#fom
{
	margin-top:10;
	height:400;
	width:600;
}
</style>
<head>
<meta charset="utf-8">
<title>jstudy.php</title>
</head>
<?php
include("AAA.php");
?>
<body><center>
<div id="now">
<div id="fom">
<form action="userinsert.php" method="get">
<font color="#0000FF" size="+2">Register User</font><br><br>
<input type="text" placeholder="enter name" name="uname"><br><br>
<textarea placeholder="address" name="address"></textarea><br><br>
<input type="number" placeholder="enter mobile no." name="mob"><br><br>
<input type="text" placeholder="enter class" name="class"><br><br>

<input type="text" placeholder="enter code" name="pass"><br><br>
<input type="submit" value="ok">    <input type="reset" value="cancel"></form></div>
</div></center>
</body>
</html>