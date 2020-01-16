
<html>
<head></head>
<title>Study.com</title>

<style>
#main
{
	width:960px;
	height:600px;
    background:url(../php%20basic/Tulips.jpg);
	margin-left:auto;
	margin-right:auto;
	
}

input[type="password"],input[type="file"]
{
	text-align:center;
	margin-top:10px;
	margin-left:400px;
	width:150px;
	height:30px;
	font-size:16px;
	border-radius:10px;
	border-color:#C00;
	border-width:1px;
}



input[type="email"]
{
	text-align:center;
	margin-top:10px;
	margin-left:400px;
	width:150px;
	height:30px;
	font-size:16px;
	border-radius:10px;
	border-color:#C00;
	border-width:1px;
}
input[type="Number"]
{
	text-align:center;
	margin-top:10px;
	margin-left:400px;
	width:150px;
	height:30px;
	font-size:16px;
	border-radius:10px;
	border-color:#C00;
	border-width:1px;
}

input[type="text"],input[type="date"]
{
	text-align:center;
	margin-top:10px;
	margin-left:400px;
	width:150px;
	height:50px;
	font-size:16px;
	border-radius:10px;
	border-color:#C00;
	border-width:1px;
}

input[type="submit"]
{
	margin-top:20px;
	margin-left:380px;
	width:80px;
	height:30px;
	font-size:16px;
	border-radius:0px;
	border-color:#000;
	border-width:1px;
}
input[type="button"]
{
	margin-top:20px;
	margin-left:20px;
	width:80px;
	height:30px;
	font-size:16px;
	border-radius:0px;
	border-color:#000;
	border-width:1px;
}
input[type="button"]:hover, input[type="submit"]:hover
{
	background-color:#3CF;
}
#frm
{
	margin-top:-40;
 	
}
</style>
<title></title>
<body>
<?PHP
include("headsimple.php");
?>
<title>jStudy.com</title>

<div id="main">


<div id="frm">
<form method="get" action="userinsert.php">
<br><h2><center><font color="#FF0000">New Registration</h2></font><br>

<input type="text" name="uname" placeholder="Enter your name"><br><br>

<input type="text" name="address" placeholder="your address"><br><br>


<input type="number" name="mob" placeholder=" Enter your mobile no."><br><br>


<input type="password" name="pass" placeholder="Enter Studentcode"><br><br>

<input type="submit" value="ok">
<input type="button" value="CANCEL" name="btnReset">
</form></div></center>

</div>
</body>
</html>