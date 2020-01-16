<?php session_start(); ?>
<?php
include("conectdb.php");

$a=$_REQUEST['uname'];
$b=$_REQUEST['upass'];

$rs=mysql_query("select * from user where uname='$a'",$con);

if(mysql_num_rows($rs)==0)
{
	header("location:loginu.php?st=1");

}
else
{
	$row=mysql_fetch_array($rs);
	
	if($row['pass']==$b)
	{
		if($row['type']=="user")
		{
			$user=$row['id'];
			$_SESSION['id']=$user;		
			header("location:homepage2.php");
		  // echo "valid user";
		}
		else if($row['type']=="admin")
		{
			$user=$row['id'];
			$_SESSION['id']=$user;		
			header("location:HOMEA3.php");
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