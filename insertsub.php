<?php
ob_start();
include_once "connect.php";
var_dump($_POST);

$query = mysqli_query($con, "SELECT objectId FROM objects WHERE objectName = '$_POST[relations]'");

$query = mysqli_fetch_assoc($query);



$insert = "INSERT INTO subobject (ID,objectName) VALUES ($query[objectId], '$_POST[subName]')";
mysqli_query($con,$insert); 

$lastinsert = mysqli_query($con, "SELECT subID from subobject where subID = LAST_INSERT_ID()");
$lastinsert = mysqli_fetch_assoc($lastinsert);

//var_dump($lastinsert);

$query2 = mysqli_query($con,"Select * from classes");
while($classes = mysqli_fetch_array($query2))
{
	$name = "$classes[className]"; 
	if ("$classes[className]" == "$_POST[$name]")
	{
		$insert2 = "Insert into subrelation (ID, className,subName) values ($lastinsert[subID],'$name','$_POST[subName]')";
		mysqli_query($con,$insert2);
	}

}




echo "done";
header('Location: index.php');
ob_flush();
?>