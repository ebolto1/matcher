<?php
ob_start();
include_once "connect.php";



$query = mysqli_query($con, "Select objectId from objects where objectName='$_POST[object]'");
$query = mysqli_fetch_assoc($query);

echo $query[objectId];

$query2 = mysqli_query($con,"Select * from classes");
while($classes = mysqli_fetch_array($query2))
{
	$name = "$classes[className]";
	if ($classes['className'] == "$_POST[$name]")
	{
		$insert = "Insert into relations (ID, className) values ($query[objectId],'$name')";
		mysqli_query($con,$insert);	
		}

}


header ('Location: index.php');
ob_flush();
?>