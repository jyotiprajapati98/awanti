<html>
<body>

<?php

$id=$_REQUEST['id'];

include("conectdb.php");

$rs=mysql_query("select * from kg1 where id=$id",$con)or die("Query Error");

while($row=mysql_fetch_array($rs))
{

echo "<form action='updatestd1.php' method='post' enctype='multipart/form-data'>";
?>
<input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>
<input type="hidden" name="id" value="<?php echo $row['id'];?>"><br>
    

<?php
}
echo "<input type='submit' value='Update'>";


echo "</form>";

?>

</body>
</html>