<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html> 

<head> 

<title> </title> 
<style>

.table
{
	border: dotted;
	background: beige;
	text-align: center;
	width: 300px;
	margin-left: auto;
	margin-right: auto;
}
td
{
	text-align: center;
}
</style>
</head> 

<body onLoad="document.MyForm.property.focus()">
<div class = "table">
<table border = "1" align= "center"> 

<th> Properties: </th> 
<?php

include_once "connect.php";

$query = mysqli_query($con, "Select * from properties");

while($rows = mysqli_fetch_array($query))
{
	echo "<tr>";
	echo "<form action='delProp.php' method='post'>";
	
	echo "<td>" . $rows['propertyName'] . "<input type='hidden' name='property' value='". 
		$rows['propertyName']. "'>".
		"<input type = 'submit' value ='delete'/>". "</td>";
	echo "</form>";
	echo "</tr>";
}



?>
<tr>
<tr>
<td>
<form action="insertproperty.php" method="post" name = "form">
<input type = "text" name = "property" />
<input type="submit" style="position: absolute; left: -9999px; width: 1px; height: 1px;"/>
</form>
</td>
</tr>

</table>
<a href = "index.php" align="center"> Back Home </a>
</div>

</body>



</html>