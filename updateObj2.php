<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.5.2.js"></script>
<title> </title> 
<style>

.elements
{
	
	

	border: dotted;
	background: beige;
	text-align: center;
	
	margin-left: auto;
	margin-right: auto;
}
</style>
</head> 

<body> 
<div class = "elements"> 
<h2> Update Object </h2> 


<form action = "update2.php" method = "post"> 

<?php

include_once "connect.php";

$result = mysqli_query($con,"SELECT * FROM doublesub");


echo"<select name = \"object\" id = 'objects'>";




while ($row = mysqli_fetch_array($result))
{ 
echo "<option name=\"object\" value=\"". $row['subName']. "\"".">".$row['subName'] . "</option>";
//$classes = mysqli_query ($con, "Select * from classes where id ! = '$query[";
}
echo "</select>";
echo "<br>";
$result = mysqli_query($con,"SELECT * FROM classes order by className asc");
$counter = 0;
while($classes = mysqli_fetch_array($result))
{
++$counter;
echo "<input type = 'checkbox' value = '".  $classes['className']."'" ."name = '". $classes['className'] ."'>" . $classes['className'];
if($counter % 5 === 0)
{
	echo "<br>";
	echo "<br>";
}
}



?>
<!--select name='select' id='select' style="display: none;">
    <option>------------</option>
</select-->
<input type = "submit"/> 

</form> 

</body> 

</html>