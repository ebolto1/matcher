<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
li
{
	text-align: center;
	margin-left: auto;
	margin-right: auto;
}
</style>

<body>
<div class = "create">
<h1> New Classes </h1>


<form action="insertclass.php" method="post"> <br>
<b> Names: </b> <br>
<input type = "text" name ="className1">
<input type = "text" name ="className2">
<input type = "text" name ="className3">
<input type = "text" name ="className4">
<input type = "text" name ="className5">
<br>
<input type ="submit">
</form>

<font color = "red"> *SPACES ARE NOT SUPPORTED use underscores* </font>
</div>
<div style ="text-align: center; margin-left: auto; margin-right: auto; list-style-type: none;">

<a href = "index.php"> Back Home </a>
<h5> All available classes in the system </h5>
<ul>
<?php

include_once "connect.php";


$query = mysqli_query($con, "Select * from classes order by className ASC");

while ($row = mysqli_fetch_array($query))
{
	

	echo "<li>". $row['className'] . "</li>";
	
	
}
?>
</ul>
</div>
</body>


</html>