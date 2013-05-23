<html>

<head> <title> </title> 

</head>
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

<body>
<div class = "create">
<h1> New Class </h1>


<form action="insertclass.php" method="post">

<b>Name:</b> <input type = "text" name ="className">
<br>
<b>associate:</b> 
<?php

include_once "connect.php";


$result = mysqli_query($con,"SELECT * FROM objects");


echo"<select name = \"relations\">";
while ($row = mysqli_fetch_array($result))
{ 
echo "<option name=\"relations\" value=\"". $row['objectName']. "\"".">".$row['objectName'] . "</option>";

}
echo "</select>";
echo "<br>";
?>
<br>
<input type ="submit">
</form>
</div>

</body>


</html>