<html>
<body bgcolor="#FFCC99">
<title>jstudy.com</title>
<?php

$id=$_REQUEST['sno'];

include("conectdb.php");

$rs=mysql_query("select * from detail where sno=$id",$con)or die("Query Error");

while($row=mysql_fetch_array($rs))
{

echo "<form action='updatedetail.php' method='post' enctype='multipart/form-data'>";
?><center>
class
<input type="text" name="class" value="<?php echo $row['class']; ?>"><br><br>
Seats
<input type="number" name="sit" value="<?php echo $row['sit']; ?>"><br><br>
fees

<input type="text" name="fee" value="<?php echo $row['fee']; ?>"><br><br>
Available Seate
<input type="number" name="avisit" value="<?php echo $row['avisit']; ?>"><br><br>




<input type="hidden" name="id" value="<?php echo $row['sno'];?>"><br>
    

<?php
}
echo "<input type='submit' value='Update'>";


echo "</form>";

?>
</center>

</body>
</html>