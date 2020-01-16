<?php
$a=$_REQUEST['even'];

$b=$_REQUEST['date'];
$c=$_REQUEST['desc'];


//$d=$_FILES['pic'];

//move_uploaded_file($_FILES['pic']['tmp_name'],"img2/".$_FILES['pic']['name']);
//echo $pic="img2/".$_FILES['pic']['name'];


//$pic=$_FILES['pic'];

//$sname=trim($pic['name']);

//move_uploaded_file($pic['tmp_name'],"img2\\".$sname);


include("conectdb.php");
	mysql_query("insert into event(evname,evdate,evdese) values ('$a','$b','$c')",$con);
 echo"ygyfygy";
?>