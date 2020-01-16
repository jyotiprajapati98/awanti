<?Php
$name=$_REQUEST['stname'];


$cl=$_REQUEST['class'];


$nu=$_REQUEST['num'];



$pic=$_FILES['photo'];

$pname=trim($pic['name']);

move_uploaded_file($pic['tmp_name'],"sphoto\\".$pname);



$connect=mysql_connect("localhost","root","");
mysql_select_db("awanti",$connect);

mysql_query("insert into principal(name,class,percent,img) values('$name','$cl','$nu','$pname')",$connect);

echo"fkghfk";
//header("location:admincls10.php");

?>