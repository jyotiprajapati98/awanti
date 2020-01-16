<?php
include("headsimple2.php")
?>
<style>
#table
{
	margin-top:100px;
}
</style>
<div id="table">
<center><table border="1"  bgcolor="#FFFFCC" cellspacing="5" cellpadding="5">
<tr>
<TH><font color="#FF0000">
ID</th>
<th><font color="#FF0000">Name</th>
<th><font color="#FF0000">Class</th>


<th><font color="#FF0000">Image</th>

</tr>

<?php
$con=mysql_connect("localhost","root","");

mysql_select_db("awanti",$con);

$q=mysql_query("select * from kg1",$con) or die("Query Error");
$count=0;
while($row=mysql_fetch_array($q))
{
	$count++;
    $id=$row['id'];
	$name=$row['name'];
       $cls=$row['class'];
	
	   

	$img=$row['pic'];
	echo"<tr>
	<td>$count</td>
      <td>$name</td>
	  
	
	<td>$cls</td>
	
	
	<td><img src='sphoto/$img' height='150' width='150'></td>
	
	</tr>";
}
?>
</table></center></div>