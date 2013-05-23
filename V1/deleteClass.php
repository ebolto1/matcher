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
<h1> Delete Class </h1>


<form action="deleteClss.php" method="post" onsubmit="return confirm('Are you sure you want to delete this?')">

<b>Name:</b> 
<?php

include_once "connect.php";


$result = mysqli_query($con,"SELECT * FROM relations");


echo"<select name = \"relations\">";
while ($row = mysqli_fetch_array($result))
{ 
echo "<option name=\"relations\" value=\"". $row['className']. "\"".">".$row['className'] . "</option>";

}
echo "</select>";
echo "<br>";
?>
<br>
<input type ="submit" value = "Delete">
</form>
</div>

</body>


</html>