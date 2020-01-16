<?Php
$name=$_REQUEST['class'];

$father=$_REQUEST['sheet'];

$mother=$_REQUEST['fees'];
$reli=$_REQUEST['avsheet'];

$connect=mysql_connect("localhost","root","");
mysql_select_db("awanti",$connect);

mysql_query("insert into detail(class,sit,fee,avisit) values('$name','$father','$mother','$reli')",$connect);

header("location:datadetail.php")

?>