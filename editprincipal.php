<html>
<body bgcolor="#FFCC99">
<title>jstudy.com</title>
<?php

$id=$_REQUEST['sno'];

include("conectdb.php");

$rs=mysql_query("select * from principal where sno=$id",$con)or die("Query Error");

while($row=mysql_fetch_array($rs))
{

echo "<form action='updateprincipal.php' method='post' enctype='multipart/form-data'>";
?><center>
name
<input type="text" name="name" value="<?php echo $row['tname']; ?>"><br><br>
address
<textarea name="add"  value="<?php echo $row['address']; ?>"></textarea><br><br>
qualification

<input type="text" name="quali" value="<?php echo $row['quali']; ?>"><br><br>
Working

<input type="text" name="work" value="<?php echo $row['working']; ?>"><br><br>
Date
<input type="date" name="date" value="<?php echo $row['date'];?>"><br><br>
Contact
<input type="number" name="num" value="<?php echo $row['contact'];?>"><br><br>
Email
<input type="email" name="mail" value="<?php echo $row['email'];?>"><br><br>


<input type="hidden" name="id" value="<?php echo $row['sno'];?>"><br>

    

<?php
}
echo "<input type='submit' value='Update'>";


echo "</form>";

?>
</center>

</body>
</html>