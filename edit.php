<body bgcolor="#FFCC99">
<center>
<?php
$a=$_REQUEST['sno'];
include("conectdb.php");
$rs=mysql_query("select * from event where sno='$a'",$con);
$row=mysql_fetch_array($rs);
$name=$row['evname'];
$date=$row['evdate'];
$des=$row['evdesc'];
//$pic=$row['image'];


echo'<form action="updateevent.php" method="post" enctype="multipart/form-data">
name
<input name="name" type="text" value="'.$name.'"><br><br>
date
<input name="date" type="date" value="'.$date.'"><br><br>
description
<textarea name="des" cols="50" rows="10" value="'.$des.'"></textarea><br><br>
<input name="id" type="hidden" value="'.$a.'"><br><br>



<input type="submit" value="Update">
</form>';

?>
</center>
<title>jstudy.php</title>