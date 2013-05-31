<?php
ob_start();
include_once "connect.php";


function redirect($Message)
{
	header('Location: objectform.php?Message='.urlencode($Message));	
}

$note;

$query = mysqli_query($con,"Select objectId from objects where objectName ='$_POST[objectName]'");
if(mysqli_num_rows($query) == 0) 
{
$sql = "Insert into objects (objectName) values ('$_POST[objectName]')";
mysqli_query($con,$sql);

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
}

else
{
	$note .= "Object ". $_POST['objectName'] . " has already been added";
	
}
$note .= "Added";
redirect($note);
ob_flush();
?>