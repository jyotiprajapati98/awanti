<?Php
$name=$_REQUEST['uname'];

$father=$_REQUEST['mail'];

$mother=$_REQUEST['mob'];

$reli=$_REQUEST['passw'];

//$cat=$_REQUEST['ctg'];

//echo $name;


//move_uploaded_file($pic['tmp_name'],"sphoto\\".$sname);
//$mother=$_REQUEST['mname'];
//$pic=$_FILES['photo'];
//$sname=trim($pic['name']);


$con=mysql_connect("localhost","root","");
mysql_select_db("awanti",$con);

mysql_query("insert into user(uname,email,mobile,pass) values('$name','$father','$mother','$reli')",$con);

header("location:loginu.php");

?>