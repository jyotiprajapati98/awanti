
<html>

<style>
form
{
	margin-top:-10px;
	text-decoration:none;
	color:#F00;
	margin-left:400px;
}
</style>
<head>
<title>study.com</title>
</head>


<body>
<?php
include("AAA.php");
?>

<center><font color="#FF99CC" size="+2"><i><u>Registration for Principal</u></i></font></center>

<div id="form">
<form action="insertprinci.php" method="post" enctype="multipart/form-data"><br>
<Required>
Name
<br><input type="text" name="txtname" placeholder="enter your name"Req uired><br><br>
Father's Name
<br><input type="text" name="fname" placeholder="enter your father's name" maxlength="20" required><br><br>
Mother's Name
<br>
<input type="text" name="mname" placeholder="enter your mother's name" required><br><br>
<br>
Address<br>
<textarea name="address" placeholder="Enter your address" maxlength="20"></textarea><br>
Qualification<br>
<input type="text" name="quali" placeholder="enter your Oualification" maxlength="20" required><br><br>

Working Time<br>
<input type="text" name="work" placeholder="enter work year" maxlength="20" required><br><br>

Contact No.<br>
<input type="number" name="contact" placeholder="enter your contact no." maxlength="20" required><br><br>
Email<br>
<input type="email" name="email" placeholder="enter your email" maxlength="20" required><br><br>




<input type="file" name="photo"><br><br>
Joining Date<br>
<input type="date" name="date" placeholder="Date of joining" maxlength="20" required><br><br>
<input type="submit" value="submit">             <input type="reset" value="cencel"><br><br>



</form>
</div>



</body>
</html>

