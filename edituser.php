<?php


$uId=$_REQUEST['id'];


$con=mysql_connect("localhost","root","");

mysql_select_db("awanti",$con);

$q=mysql_query("select * from user where id=$uId",$con);

while($row=mysql_fetch_array($q))
{
	$name=$row['uname'];
	$pass=$row['pass'];
	
	
	?>
    <form action="edituser_do.php" method="post">
    <input type="text" name="uname" value="<?php  echo $name;  ?>" required/>
    
    
    <input type="hidden" name="hiddenId" value="<?php echo $uId; ?>"
    <br />
    
    <input type="password" name="pass" value="<?php  echo $pass;  ?>" required/>
    
    <br />
    
    <input type="submit" value="edit record" />
    
    </form>
    
    <?php
}



?>