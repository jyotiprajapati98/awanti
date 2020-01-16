<style>
#jyoti
{
	margin-top:-550px;
	text-decoration:none;
	color:#F00;

}
</style>
<?php
include("headadmin.html");
?>
<div id="jyoti"><?php



 include("conectdb.php");
 $rs=mysql_query("select * from event",$con);

 echo"<center><table border='1' width='1000' height='50'>";
 echo"<tr><th>S_No</th> <th>Event Name</th><th>Date</th><th>Description</th><th>Image</th></tr>";
 while($row = mysql_fetch_array($rs))
 {
	 echo"<tr>";
	   echo"<td>";
	   echo $row['s.no'];
	   $sno=$row['s.no'];
	   echo"</td>";
	   
	    echo"<td>";
	   echo $row['name'];
	   echo"</td>";
	    
	    echo"<td>";
	   echo $row['date'];
	   echo"</td>";
	    
	    echo"<td>";
	   echo $row['des'];
	   echo"</td>";
	    
	    echo"<td>";
	    $x = $row['image'];
		echo "<img src='img2/$x' height='200' width='300'>";
	   echo"</td>";

	
	   
	   echo"<td>";
	   echo "<a href='deleteevent.php?sno=".$sno."'>Delete</a>";
	   echo"</td>";
	   
	    echo"<td>";
	   echo "<a href='editevent.php?sno=".$sno."'>Edit</a>";
	   echo"</td>";
	   
	   echo"</tr>";
 }
	   echo"</table>";

	 

?>
</div>