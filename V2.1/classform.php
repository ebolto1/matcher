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
<?php 

if (isset($_GET['Message'])) {
    print '<script type="text/javascript">alert("' . $_GET['Message'] . '");</script>';
}

?>


<div class = "create">
<h1> New Classes </h1>


<form action="insertclass.php" method="post"> <br>
<b> Names and description: </b> <br>
<input type = "text" name ="className1"/>: <input type = "text" name ="description1"/> <br> <br>
<input type = "text" name ="className2"/> : <input type = "text" name ="description2"/><br><br>
<input type = "text" name ="className3"/> : <input type = "text" name ="description3"/><br><br>
<input type = "text" name ="className4"/> : <input type = "text" name ="description4"/><br><br>
<input type = "text" name ="className5"/> : <input type = "text" name ="description5"/><br><br>
<br>
<input type ="submit">
</form>

<font color = "red"> *SPACES ARE NOT SUPPORTED use underscores* </font>
</div>
<div style ="margin-left: auto; margin-right: auto; list-style-type: none;">

<a href = "index.php"> Back Home </a>

<table border="1">
<th> All available classes in the system </th>
<th> Description </th>
<?php

include_once "connect.php";


$query = mysqli_query($con, "Select * from classes ");

while ($row = mysqli_fetch_array($query))
{
	
	echo "<tr>";
	echo "<td>". $row['className']. "</td>";
	echo "<td>". $row['Description']."</td>";
	echo "</tr>";
	
}
?>
</table>
</div>
</body>


</html>