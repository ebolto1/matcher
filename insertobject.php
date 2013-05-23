<?php
ob_start();
include_once "connect.php";

$sql = "Insert into objects (objectName) values ('$_POST[objectName]')";
if (!mysqli_query($con,$sql))
{
  die('Error: ' . mysqli_error($con));
}

$query2 = mysqli_query($con,"Select * from classes");
while($classes = mysqli_fetch_array($query2))
{
	$name = "$classes[className]";
	if ($classes['className'] == "$_POST[$name]")
	{
		$insert = "Insert into relations (ID, className) values (LAST_INSERT_ID(),'$name')";
		mysqli_query($con,$insert);	
		}

}


header('Location: index.php');

ob_flush();
?>