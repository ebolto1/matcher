<?php
ob_start();
include_once "connect.php";



$query = mysqli_query($con, "Select objectId from objects where objectName='$_POST[object]'");
$subQuery = mysqli_query ($con, "SELECT subID FROM subobject WHERE objectName='$_POST[object]'");
$query = mysqli_fetch_assoc($query);
$subQuery = mysqli_fetch_assoc($subQuery);

if(!is_null($query))
{
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
}

if(!is_null($subQuery))
{
$query2 = mysqli_query($con,"Select * from classes");
while($classes = mysqli_fetch_array($query2))
{
	$name = "$classes[className]";
	if ($classes['className'] == "$_POST[$name]")
	{
		$insert = "Insert into subrelation (ID, className,subName) values ($subQuery[subID],'$name',' $_POST[object]')";
		mysqli_query($con,$insert);	
	}

}
}


header ('Location: updateObj.php');
ob_flush();
?>