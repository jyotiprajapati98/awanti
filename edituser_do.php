<?php


$name=$_REQUEST['uname'];
$hiddenId=$_REQUEST['hiddenId'];

$pass=$_REQUEST['pass'];

$con=mysql_connect("localhost","root","");

mysql_select_db("awanti",$con);

$q=mysql_query("update user set uname='$name', pass='$pass' where id=$hiddenId",$con);
?>
<script>
alert("data has been updated");
window.location.replace("USERS.php");
</script>