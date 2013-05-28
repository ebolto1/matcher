<?php

include_once "connect.php";

$sql = "DELETE FROM properties where propertyName = '$_POST[property]'";
if (!mysqli_query($con,$sql))
{
  die('Error: ' . mysqli_error($con));
}

var_dump ($_POST);

header ('Location: properties.php');
?>