

<html>

<style>
form
{
	margin-top:50px;
	text-decoration:none;
	color:#F00;
	margin-left:400px;
}
</style>
<head>
<title>study.com</title>
</head>


<body>
<center><font color="#FF0000" size="+3"><i><u>SEND FEEDBACK</u></i></font></center>

<div id="form">
<form action="insertcom.php" method="post" enctype="multipart/form-data" onSubmit="return validationForm()" name="rf"><br>
<Required>
Name
<br><input type="text" name="name" placeholder="enter your name"></Required><br><br>
Address<br>
<textarea name="add" placeholder="enter your address"></textarea><br><br>
Contact No.<br>
<input type="number" name="num" placeholder="enter contact number"><br><br>

Feedback<br>
<textarea name="feed" placeholder="enter feedback"></textarea><br><br>



<input type="submit" value="submit">             <input type="reset" value="cencel"><br><br>
<a href="data.php">show table</a>


</form>
</div>



</body>
</html>
