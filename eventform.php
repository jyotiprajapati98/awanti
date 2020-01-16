<html>
<head>
<title>form1</title>
<style>

b
{
	font-size:25;
	
}
#contain
{
	background-color:#F99;
	width:700px;
	height:405;
	margin-top:30px;
	margin-left:350px;
}
</style>
</head>

<body>
<?php
include("AAA.php");
?>


<div id="contain">
<Required>
<form  method="post" action="addeventform.php" enctype="multipart/form-data">
<center>
<table border="0" height="100" width="200">
<caption><h1><u>Add Notice</u></h1></caption>

<tr>
<td>
<b> Name:</b></td>
<td>
<input type="text" name="event" required>
</tr>

<tr>
<td>
<b>Date:</b>
</td>
<td>
<input type="date"name="date" required>

</td>
</tr>

<tr>
<td>
<b>Description:</b></td>
<td>
<textarea name="des" cols="50" rows="10" required></textarea></td>
</tr>

<tr>
<td></td>
<td>
<input type="submit" value="Ok" >
<input type="reset" value="Cancel">
</td>
</tr>

</table>
</center>
</form></required>

</body>
</html>