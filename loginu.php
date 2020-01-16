
<html>
<head>
<title></title>
</head>
<style>
#form
{
	width:700px;
	height:400px;

	background:#F66;
	margin-top:20px;
	margin-left:300px;
	
}
input[type="password"]
{
	text-align:center;
	margin-top:10px;
	margin-left:70px;
	width:350px;
	height:30px;
	font-size:16px;
	border-radius:10px;
	border-color:#C00;
	border-width:1px;
}
input[type="text"]
{
	text-align:center;
	margin-top:10px;
	margin-left:70px;
	width:350px;
	height:30px;
	font-size:16px;
	border-radius:10px;
	border-color:#C00;
	border-width:1px;
}
a
{
	text-decoration:none;
}

</style>

<title>jStudy.com</title>

<body> 
<?php
include("headsimple.php");
?>       
<title>jstudy.com</title>
      
                   <div id="form">
                   
					<center><form name="form" action="logincheck.php" method="get">
                    <br>
						<center>
							
								<input type="text" required placeholder="User Name" name="uname" type="text" autofocus>
							<br>
                            
								
							<br>
                            
								
							<br>
							
				
								<input type="password" required  placeholder="Student code" name="upass" type="password">
							</center><br>
							
								<label>
									<input name="remember" type="checkbox" value="Remember Me"><font color="#FFFFFF">Remember Me
								</label>
							
                            <font color="#FFFFFF"><br><br>
							<input type="submit" class="btn btn-primary" value="Login">             <input type="reset" value="Cancel"><br><br>
                          	
                       <br> <a href="forgetpassuser.php"><font color="#FFFFFF">forgot password</a>
                       

                       
                       <!-- <br> <a href="user-register.php"><font color="#FFFFFF">New Registration</a>-->
						</fieldset>
                            
					</form></center>
                    </div>
</body>

</html>