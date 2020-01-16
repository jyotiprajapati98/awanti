
<html>
<head></head>
<style>
#frm
{
	width:960px;
	height:400px;
    
	margin-left:auto;
	margin-right:auto;
	
}

input[type="password"],input[type="file"]
{
	text-align:center;
	margin-top:10px;
	margin-left:300px;
	width:350px;
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
	margin-left:300px;
	width:350px;
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
	margin-left:300px;
	width:350px;
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
	margin-left:300px;
	width:350px;
	height:30px;
	font-size:16px;
	border-radius:10px;
	border-color:#C00;
	border-width:1px;
}

input[type="submit"]
{
	margin-top:20px;
	margin-left:350px;
	width:100px;
	height:25px;
	font-size:16px;
	border-radius:10px;
	border-color:#000;
	border-width:1px;
}
input[type="button"]
{
	margin-top:20px;
	margin-left:30px;
	width:100px;
	height:25px;
	font-size:16px;
	border-radius:10px;
	border-color:#000;
	border-width:1px;
}
input[type="button"]:hover, input[type="submit"]:hover
{
	background-color:#3CF;
}
#frm
{
 	
}
</style>
<title></title>
<body>
<?PHP
include("headsimple.php");
?>



<div id="frm">
<form method="get" action="userinsert.php">
<h1><center><font color="#FF0000">New Registration</center></h1></font>
<input type="text" name="uname" placeholder="Enter your name"><br><br>

<input type="email" name="mal" placeholder="Enter your email"><br><br>

<input type="number" name="num" placeholder=" Enter your mobile no."><br><br>

<input type="password" name="pass" placeholder="Enter your password"><br><br>

<input type="submit" value="ok">
<input type="button" value="CANCEL" name="btnReset">
</form></center>

</div>
</body>
</html>