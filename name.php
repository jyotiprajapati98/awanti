<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<script type="text/javascript">
    function show()
	{
		if(document.f1.t1.value=="")
		{
			alert("name can't be empty");
			document.f1.t1.focus();
		}
	
		else if(document.f1.t1.value.length<4)
		{
			alert("name can't be accept");
			document.f1.t1.focus();
		}
	}
			
</script>


<body>
<form action="insert1.php" method="get" name="f1">
<input type="text" name="t1" placeholder="enter name">
<input type="button" onClick="show" value="ok">
</form>
</body>
</html>