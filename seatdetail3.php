
<html>

<style>
form
{
	margin-top:10px;
	text-decoration:none;
	color:#F00;
	margin-left:400px;
}
</style>
<?php
include("AAA.php");
?>
<head>
<title>study.com</title>
</head>


<body background="">
<center><font color="#FF0000" size="+1"><i><u>Add Details</u></i></font></h1></center>

<div id="form">
<form action="insertdetail.php" method="post" enctype="multipart/form-data" onSubmit="return validationForm()" name="rf"><br>
<Required>
Class
<br><input type="text" name="class" placeholder="class"></Required><br><br>
Sheets
<br><input type="number" name="sheet" placeholder="sheets" maxlength="20"><br><br>
Fees
<br>
<input type="number" name="fees" placeholder="fees"><br><br>
Available Sheets
<br>
<input type="number"  name="avsheet">
<br><br>


<input type="submit" value="submit">             <input type="reset" value="cencel"><br><br>



</form>
</div>



</body>
</html>
