<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("awanti",$con);


$a=$_REQUEST['user_name'];
$b=$_REQUEST['user_pass'];

$q=mysql_query("select * from register where name='$a'",$con);


if(mysql_num_rows($q)==0)
{
	header("location:loginu.php?st=1");

}
else
{
	$row=mysql_fetch_array($q);
	
	if($row['userPass']==$b)
	{
		if($row['userType']=="user")
		{
			$user=$row['userId'];
			$_SESSION['userId']=$user;		
			header("location:userpage.php");
		  // echo "valid user";
		}
		else if($row['userType']=="admin")
		{
			$user=$row['userId'];
			$_SESSION['uid']=$user;		
			header("location:adminhomepage.php");
//
		}
	}

	else
	{
	  header("location:loginu.php?st=2");
	
	 //  echo "invalid password";
	}
	

}



?>