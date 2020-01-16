
<html>
<head>

</head>
<?php
include("headadmin.php");
?>

<body bgcolor="#FF9966">
<center>
<form action="insertevent.php" method="post" enctype="multipart/form-data">
Event Name<BR><BR>
<input type="text" name="even" placeholder="name"><br><br>

Event Date<br><br>
<input type="date" name="date"><br><br>

Description<br><br>
<textarea   name="desc" ></textarea><br><br>
Image<br>
<input type="file" value="image" name="picname">
<br>
<input type="submit">
</form>

<a href="showevent.php">Show datas</a>
</center>

</body>
</html>
