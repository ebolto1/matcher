<?php

include_once "connect.php";

$sql = "Insert into objects (objectName) values ('$_POST[objectName]')";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

header('Location: index.php');
?>