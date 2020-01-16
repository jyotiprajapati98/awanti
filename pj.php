<?php
include("../000massage/conectdb.php");

$user_email=$_REQUEST['user_email'];
$user_pass=$_REQUEST['user_pass'];


$query=mysql_query("select * from register where email='$user_email'",$) or die("error");

if(mysql_num_rows($query)>0)
{
	while($result=mysql_fetch_array($query))
{
	$pass=$result['upass'];
	if($pass==$user_pass)
	{
			$uid=$result['uid'];
			$expireTime=time()+60*60*24*30;
			setcookie("login",$uid,$expireTime);

		//echo"yes";
		echo "<script>
				alert('Login Sucessfull');
				window.location.replace('home_page.php');
			  </script>";
		//header("location:admin/index.php");
	}
	else
	{
		//echo"no";
		echo "<script>
				alert('Wrong password');
				window.location.replace('index.html');
			  </script>";
	}
}

	else if($row['userType']=="admin")
		{
			$user=$row['userId'];
			$_SESSION['uid']=$user;		
			header("location:admin_choice.php");
//
		
}
}
else 
	{
		//echo"no";
		echo "<script>
				alert('Login Unsucessfull');
				window.location.replace('index.html');
			  </script>";
	}



?>
