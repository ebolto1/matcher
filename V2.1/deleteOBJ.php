<?php

include_once "connect.php";


var_dump($_POST);
$query = mysqli_query($con,"SELECT objectId FROM objects WHERE objectName='$_POST[objects]'");
$subQuery = mysqli_query ($con, "SELECT subID FROM subobject WHERE objectName='$_POST[objects]'");
$query = mysqli_fetch_assoc($query);
$subQuery = mysqli_fetch_assoc($subQuery);

if(!is_null($query))
{	
	mysqli_query($con,"DELETE FROM relations WHERE ID=$query[objectId]");
	mysqli_query($con,"DELETE FROM objects WHERE objectName='$_POST[objects]'");
}
if(!is_null($subQuery))
{	
	mysqli_query($con,"DELETE FROM subrelation WHERE ID= $subQuery[subID]");
	mysqli_query($con,"DELETE FROM subobject WHERE objectName='$_POST[objects]'");
}

echo "Done";


var_dump($query);
header('Location: index.php');

?>