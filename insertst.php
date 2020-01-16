<?Php
$name=$_REQUEST['jyoti'];

$fa=$_REQUEST['joya'];

$mo=$_REQUEST['jiya'];

$reli=$_REQUEST['rel'];
$cat=$_REQUEST['ctg'];

$d=$_REQUEST['dob'];

$cl=$_REQUEST['class'];

$ad=$_REQUEST['address'];

$do=$_REQUEST['addate'];

$nu=$_REQUEST['num'];

$pic=$_FILES['photo'];

$sname=trim($pic['name']);

move_uploaded_file($pic['tmp_name'],"sphoto\\".$sname);


$connect=mysql_connect("localhost","root","");
mysql_select_db("awanti",$connect);

mysql_query("insert into kg1(name,fname,mname,reli,cate,dob,cls,adrs,asd,cont) values('$name','$fa','$mo','$reli','$cat','$d','$cl','$ad','$do','$nu',)",$connect);
echo"student registerd";

?>
