
<html>
<style>
body
{
	background-image:;
	border-image-repeat:repeat;
	text-decoration:none;
	color:#CF3;
	font-size:36px;
}
a
{
	text-decoration:none;
	color:#FF9;
}
</style>
<head>
<script>
  function jain()
  {
	history.forward();
	history.href="home.html";
  }
</script>
</head>
<body background="img2/20160321_141118.jpg">
<center>
<?php

session_start();
//unset($_SESSION['logout']);
$expireTime=time()-60*60*24*30;
setcookie("logout",'',$expireTime);

//session_destroy();
//header("location:index.html");

echo "Thanks...Visit Again
<br>
This is may school and thay are may friends <br>
Thankyou";

?>
<br>
<script>
jain();
</script>
<a href="home.html">click here to logout</a></center>
</body>
</html>