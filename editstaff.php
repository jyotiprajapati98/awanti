<html>
<body bgcolor="#FFCC99">
<title>jstudy.com</title>
<?php

$sno=$_REQUEST['sno'];

include("conectdb.php");

$rs=mysql_query("select * from staff where sno='$sno' ",$con)or die("Query Error");

while($row=mysql_fetch_array($rs))
{

echo "<form action='updatestaff.php' method='post' enctype='multipart/form-data'>";
?><center>
name
<input type="text" name="name" value="<?php echo $row['tname']; ?>"><br><br>
address
<input type="text" name="add" value="<?php echo $row['address']; ?>"><br><br>
qualification

<input type="text" name="quali" value="<?php echo $row['quali']; ?>"><br><br>
date

<input type="date" name="date" value="<?php echo $row['date']; ?>"><br><br>

<input type="hidden" name="sno" value="<?php echo $row['sno'];?>"><br>
    

<?php
}
echo "<input type='submit' value='Update'>";


echo "</form>";

?>
</center>

</body>
</html>