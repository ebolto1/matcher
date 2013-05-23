<?php

include_once "connect.php";

$sql = "INSERT INTO properties(propertyName) VALUES ('$_POST[property]')";
if (!mysqli_query($con,$sql))
{
  die('Error: ' . mysqli_error($con));
}
var_dump ($_POST);
header ('Location: properties.php');
?>