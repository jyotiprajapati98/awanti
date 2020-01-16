<?php
$a=$_REQUEST['name'];

$b=$_REQUEST['address'];
$c=$_REQUEST['num'];
$fe=$_REQUEST['feedback'];


//$d=$_FILES['pic'];

//move_uploaded_file($_FILES['pic']['tmp_name'],"img2/".$_FILES['pic']['name']);
//echo $pic="img2/".$_FILES['pic']['name'];


//$pic=$_FILES['pic'];

//$sname=trim($pic['name']);

//move_uploaded_file($pic['tmp_name'],"img2\\".$sname);


include("conectdb.php");
	mysql_query("insert into feedback(name,address,contact,feedback) values ('$a','$b','$c','$fe')",$con);
 echo"ygyfygy";
?>