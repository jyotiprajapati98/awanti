

<html>
<style>
textarea
{
	width:200px;
	height:80px;
	
}
input:type
{
	width:400;
	height:200;
	
}
</style>

<head>

</head>
<?php
include("headsimple2.php");
?>

<body bgcolor="#FF9966">
<center>
<form action="insertcom.php" method="get">
<center><font size="+2" color="#0000FF"><i><u>Send Feedback</u></font><br>
<font color="#0000FF">
 Name<BR>
<input type="text" name="name" placeholder="Enter name"><br><br>

Address<br>
<textarea name="address" placeholder="enter address"></textarea><br><br>

Contact<br>
<input type="number" name="num" placeholder="enter contact no." ><br><br>

<div id="feed">Feedback<br>
<textarea name="feedback" placeholder="write your feedback /suggetion"></textarea><br>
</div>

<br>
<input type="submit" value="ok">  <input type="reset" value="cancel">
</form>

</center>

</body>
</html>
