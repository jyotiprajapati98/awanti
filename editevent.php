<?php
$a=$_REQUEST['sno'];
include("conectdb.php");
$rs=mysql_query("select * from event where ssno='$a'",$con);
$row=mysql_fetch_array($rs);
$name=$row['name'];
$date=$row['date'];
$des=$row['des'];
$image=$row['image'];


echo'<form action="editevent2.php" method="post" enctype="multipart/form-data">
<input name="sno" type="hidden" value="'.$a.'">
<input name="name" type="text" value="'.$name.'">
<input name="date" type="date" value="'.$date.'">
<textarea name="des" cols="50" rows="10" value="'.$des.'"></textarea>
<input name="pic" type="file" value="'.$image.'" >



<input type="submit" value="edit">
</form>';

?>
