<html>
<head>
<title></title>

</head>

<body>
<?php
include("AAA.PHP");
?>
<center>
<form  action="Adfimg.php" method="post" enctype="multipart/form-data">

<table border="0" height="100" width="200"><center>
Add function image</center><br>

<b>Date:</b>
<br><br>


<input type="date"name="date" required>

<br><br><b>Description:</b>
<br><br>
<textarea name="des" cols="50" rows="10"></textarea></td>


<br><br>
<b>Image:</b>
<br><br>
<input type="file" name="pic"><br>
<br><br>
<input type="submit" value="Ok" >
<input type="reset" value="Cancel">


</table>
</center>
</form></required>

</body>
</html>