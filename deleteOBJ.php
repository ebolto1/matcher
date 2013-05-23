<?php

include_once "connect.php";


var_dump($_POST);
$query = mysqli_query($con,"SELECT objectId FROM objects WHERE objectName='$_POST[objects]'");
$query = mysqli_fetch_assoc($query);

mysqli_query($con,"DELETE FROM relations WHERE ID=$query[objectId]");



mysqli_query($con,"DELETE FROM objects WHERE objectName='$_POST[objects]'");


echo "Done";

header('Location: index.php');

?>