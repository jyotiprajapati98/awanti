<?Php
$name=$_REQUEST['stname'];

$cl=$_REQUEST['class'];

$nu=$_REQUEST['percent'];



$pic=$_FILES['photo'];

$pname=trim($pic['name']);

move_uploaded_file($pic['tmp_name'],"sphoto\\".$pname);



$connect=mysql_connect("localhost","root","");
mysql_select_db("awanti",$connect);

mysql_query("insert into brightstd(name,class,percent,img) values('$name','$cl','$nu','$pname')",$connect);


header("location:brighthome3.php");

?>