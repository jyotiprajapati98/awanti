<style>
#table
{
	margin-top:0px;
}
</style>

<?php
include("AAA.php");
?>
<title>Study.com</title>
<div id="table">
<center><table border="1" bgcolor="#FFFFCC" cellspacing="5" cellpadding="5">
<tr>
<th><font color="#FF0000">S.no.</th>
<th><font color="#FF0000">Code</th>
<th><font color="#FF0000">Name</th>
<th><font color="#FF0000">Father Name</th>
<th><font color="#FF0000">Mother Name</th>
<th><font color="#FF0000">Religius</th>
<th><font color="#FF0000">Category</th>
<th><font color="#FF0000">Date Of Birth</th>
<th><font color="#FF0000">Blood Group</th>

<th><font color="#FF0000">Class</th>
<th><font color="#FF0000">Address</th>
<th><font color="#FF0000">Addmission Date</th>

<th><font color="#FF0000">Total Fee</th>

<th><font color="#FF0000">Pay Fee</th>

<th><font color="#FF0000">Remain Fee</th>

<th><font color="#FF0000">Contact No.</th>

<th><font color="#FF0000">Image</th>
<th><font color="#FF0000">Edit</th>
<th><font color="#FF0000">Delete</th>
</tr>

<?php
$con=mysql_connect("localhost","root","");

mysql_select_db("awanti",$con);

$q=mysql_query("select * from kg2",$con) or die("Query Error");

$count=0;
while($row=mysql_fetch_array($q))
{
	$count++;
    $id=$row['id'];
	$sid=$row['stdcode'];
	$name=$row['name'];
	$fname=$row['fname'];
	$mname=$row['mname'];
	$rl=$row['rlg'];
    $cat=$row['cate'];
     $dob=$row['dob'];
	  $bd=$row['bloodgrp'];
       $cls=$row['class'];
	   $y=$row['address'];
	   $o=$row['adsdate'];
	   
	   $fee=$row['fee'];
	   
	   $pay=$row['pay'];
	   
	   $rf=$row['ref'];
	   
	   $t=$row['contact'];
	
	$img=$row['img'];
	echo"<tr>
	<td>$count</td>
	<td>$sid</td>
	<td>$name</td>
	<td>$fname</td>
	<td>$mname</td>
	<td>$rl</td>
	<td>$cat</td>
	<td>$dob</td>
	<td>$bd</td>
	<td>$cls</td>
	<td>$y</td>
	<td>$o</td>
	
	<td>$fee</td>
	<td>$pay</td>
	<td>$rf</td>
	
	
	<td>$t</td>
	
	<td><img src='sphoto/$img' height='100' width='100'></td>
	
	<td><a href='editkg2.php?id=$id'>Edit</a></td>
	<th><a href='delkg2.php?id=$id'>Delete</a></th>

	</tr>";
}
?>
</table></center></div>