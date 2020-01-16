
<html>


<style>
form
{
	margin-top:10px;
	text-decoration:none;
	color:#F00;
   
	
}
</style>
<?php
include("AAA.php");
?>

<head>
<title>jstudy.com</title>
</head>


<body background="Hydrangeas.jpg"><br>
<center><h2><font color="#FF0000"><i><u>Addmission in class 2</u></i></font></h2></center>
<center>
<div id="form">
<form action="insertcls2.php" method="post" enctype="multipart/form-data" onSubmit="return validationForm()" name="rf"><br>
Student Code<br>
<input type="text" name="code" placeholder="enter your code"required><br><br>


Name
<br><input type="text" name="stname" placeholder="enter your name"Required><br><br>
Father's Name
<br><input type="text" name="faname" placeholder="enter your father's name" maxlength="20"required><br><br>
Mother's Name
<br>
<input type="text" name="moname" placeholder="enter your mother's name"required><br><br>
<br>
Religious<br>
<select name="rel">
<option></option>
<option>Hinduism</option>
<option>Islam</option>
<option>Christianity</option>
<option>Sikhism</option>
</select><br><br>

Category<br>
<select name="ctg">
<option></option>
<option>O.B.C.</option>
<option>S.T.</option>
<option>S.C.</option>
<option>General</option>
</select><br><br>
Date of Birth<br>
<input type="date" name="dob" placeholder="enter your dob"required><br><br>
Blood Group<br>
<input type="text" name="blood" placeholder="enter bloodgrp"required><br><br>

Class<br>
<input type="text" name="class" placeholder="enter your class"required><br><br>
Address<br>
<textarea name="address" placeholder="enter your address"></textarea><br><br>
Addmission date<br>
<input type="date" name="addate" placeholder="enter your addminssion date"required><br><br>

Total Fees<br>
<input type="number" name="fee"><br><br>
Pay Fee<br><br>
<input type="number" name="pay"><br><br>
Remain Fee<br><br>
<input type="number" name="remain">
<br><br>

Contact No.<br>
<input type="number" name="num" placeholder="enter contact number"required><br><br>
Photo<br>
<input type="file" name="photo"><br><br>


<input type="submit" value="submit">             <input type="reset" value="cencel"><br><br>



</form>
</div>
</center>


</body>
</html>
