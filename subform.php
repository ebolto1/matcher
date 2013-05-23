<html>

<head> <title> </title> 


<style>

.object
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

<div class = "object">
<h1> New SubObject </h1>

<form action="insertsub.php" method="post">

<b>name:</b> <input type = "text" name ="subName"><br>

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


<b>Classes: </b> <br><br>
<?php
include_once "connect.php";

$result = mysqli_query($con,"SELECT * FROM classes");
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
<br>

<br>
<input type ="submit">
</form>
</div>

</body>


</html>