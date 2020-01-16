<?Php
//$sid=$_REQUEST['id'];
$name=$_REQUEST['jyoti'];

$father=$_REQUEST['fname'];

$mother=$_REQUEST['mname'];

$reli=$_REQUEST['rel'];

$cat=$_REQUEST['ctg'];

$d=$_REQUEST['dob'];

$cl=$_REQUEST['class'];

$ad=$_REQUEST['address'];

$d=$_REQUEST['addate'];

$tf=$_REQUEST['fee'];

$pa=$_REQUEST['pay'];

$re=$_REQUEST['remain'];

$nu=$_REQUEST['num'];



$pic=$_FILES['photo'];

$pname=trim($pic['name']);

move_uploaded_file($pic['tmp_name'],"sphoto\\".$pname);

//$p=$_FILES['photo'];

//$sname=trim($p['name']);

//move_uploaded_file($p['tmp_name'],"sphoto\\".$sname);


$connect=mysql_connect("localhost","root","");
mysql_select_db("awanti",$connect);

mysql_query("insert into kg1(name,fname,mname,rlg,cate,dob,class,address,adsdate,fee,pay,ref,contact,pic) values('$name','$father','$mother','$reli','$cat','$d','$cl','$ad','$d','$tf','$pa','$re','$nu','$pname')",$connect);
echo"bjzdbhxjzdv";
//header("location:adminclass1.php");

?>