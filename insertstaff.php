<?Php
$name=$_REQUEST['txtname'];

$father=$_REQUEST['fname'];

$mother=$_REQUEST['mname'];

$ad=$_REQUEST['address'];

$q=$_REQUEST['quali'];

$c=$_REQUEST['contact'];

$re=$_REQUEST['mail'];

$reli=$_REQUEST['date'];

$pic=$_FILES['photo'];

$pname=trim($pic['name']);

move_uploaded_file($pic['tmp_name'],"sphoto\\".$pname);


$con=mysql_connect("localhost","root","");
mysql_select_db("awanti",$con);

mysql_query("insert into staff(tname,fname,mname,address,quali,contact,email,date,image) values('$name','$father','$mother','$ad','$q','$c','$re','$reli','$pname')",$con);

header("location:see.php");

?>