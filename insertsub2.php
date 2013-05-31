<?php
ob_start();
include_once "connect.php";
var_dump($_POST);



$query = mysqli_query($con, "SELECT subId FROM subobject WHERE objectName = '$_POST[relations]'");

$query = mysqli_fetch_assoc($query);



$insert = "INSERT INTO doublesub (subID,subName) VALUES ($query[subId], '$_POST[subName]')";
mysqli_query($con,$insert); 

$lastinsert = mysqli_query($con, "SELECT id from doublesub where id = LAST_INSERT_ID()");
$lastinsert = mysqli_fetch_assoc($lastinsert);

//var_dump($lastinsert);

$query2 = mysqli_query($con,"Select * from classes");
while($classes = mysqli_fetch_array($query2))
{
	$name = "$classes[className]"; 
	if ("$classes[className]" == "$_POST[$name]")
	{
		$insert2 = "Insert into doublerelation (ID, className,subName) values ($lastinsert[id],'$name','$_POST[subName]')";
		mysqli_query($con,$insert2);
	}

}




echo "done";
header('Location: index.php');
ob_flush();
?>