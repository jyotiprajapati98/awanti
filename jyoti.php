
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



<body background="">
<?php
include("upperhead1.html");
?>
<br><br><br>
<center><h1><font color="#FF0000"><i><u>Addmission in First Class</u></i></font></h1></center>

<div id="form">
<form action="insertstudent.php" method="post" enctype="multipart/form-data" onSubmit="return validationForm()" name="rf"><br>
<Required>
Name
<br><input type="text" name="txtname" placeholder="enter your name"></Required><br><br>
Father's Name
<br><input type="text" name="fname" placeholder="enter your father's name" maxlength="20"><br><br>
Mother's Name
<br>
<input type="text" name="mname" placeholder="enter your mother's name"><br><br>
<br>
Religious<br>
<select name="Religious">
<option></option>
<option>Hinduism</option>
<option>Islam</option>
<option>Christianity</option>
<option>Sikhism</option>
</select><br><br>

Category<br>
<select name="Category">
<option></option>
<option>O.B.C.</option>
<option>S.T.</option>
<option>S.C.</option>
<option>General</option>
</select><br><br>

<input type="file" name="photo"><br><br>
<input type="submit" value="submit">             <input type="reset" value="cencel"><br><br>
<a href="data.php">show table</a>


</form>
</div>



</body>
</html>
