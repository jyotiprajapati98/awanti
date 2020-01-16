
<html>

<style>
form
{
	margin-top:50px;
	text-decoration:none;
	color:#F00;
   
	
}
</style>

<head>
<title>study.com</title>
</head>
<?PHP
include("AAA.php");
?>


<body><br>
<center><font color="#FF0000"><i><u>ADD STUDENT</u></i></font></center>
<center>
<div id="form">
<form action="bright.php" method="post" enctype="multipart/form-data" name="rf">
<Required>
Name
<br><input type="text" name="stname" placeholder="enter your name"></Required><br><br>
Class<br>
<input type="text" name="class" placeholder="enter your class"><br><br>
Percent<br>
<input type="number" name="percent" placeholder="enter percent"><br><br>
Photo<br>
<input type="file" name="photo"><br><br>


<input type="submit" value="submit">             <input type="reset" value="cencel"><br><br>



</form>
</div>
</center>


</body>
</html>
