<?Php
$name=$_REQUEST['txtname'];

$father=$_REQUEST['fname'];

$mother=$_REQUEST['mname'];

$ad=$_REQUEST['address'];

$q=$_REQUEST['quali'];
//$w=$_REQUEST['work'];

$c=$_REQUEST['contact'];
$em=$_REQUEST['email'];



$reli=$_REQUEST['date'];

$pic=$_FILES['photo'];

$pname=trim($pic['name']);

move_uploaded_file($pic['tmp_name'],"sphoto\\".$pname);


$con=mysql_connect("localhost","root","");
mysql_select_db("awanti",$con);

mysql_query("insert into principal(tname,fname,mname,address,quali,contact,email,date,image) values('$name','$father','$mother','$ad','$q','$c','$em','$reli','$pname')",$con);

echo"sdjcgdjksvhkdfsv";
//header("location:princihome3.php");

?>