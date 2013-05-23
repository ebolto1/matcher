<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head> <title> </title> 


<style>

.create
{
	border: dotted;
	background: beige;
	text-align: center;
	width: 300px;
	margin-left: auto;
	margin-right: auto;
}

</style>
</head>
<body>

<div class = "create">
<h1> Delete Object </h1>


<form action="deleteOBJ.php" method="post" onsubmit="return confirm('Are you sure you want to delete this?')">

<b>Name:</b> 
<?php

include_once "connect.php";


$result = mysqli_query($con,"SELECT * FROM objects UNION SELECT * from subobject");
//$result2 = mysqli_query($con,"SELECT * FROM subobject")

echo"<select name = \"objects\">";
while ($row = mysqli_fetch_array($result))
{ 
echo "<option name=\"objects\" value=\"". $row['objectName']. "\"".">".$row['objectName'] . "</option>";

}
echo "</select>";
echo "<br>";
?>
<br>
<input type ="submit" value = "Delete">
</form>
<font color = "red"> *Warning all Classes under selected Object will be <b>deleted</b>* </font>
</div>

</body>


</html>