<?php

include_once "connect.php";
var_dump($_POST['className']);
$result = mysqli_query($con,"Select objectId from objects where objectName = '$_POST[relations]'");


if($result === FALSE) {
    die(mysqli_error()); // TODO: better error handling
}

$result = mysqli_fetch_assoc($result);
var_dump($result);

$sql2 = "Insert into relations (id, className) values ($result[objectId],'$_POST[className]')";
   
if (!mysqli_query($con,$sql2))
  {
  die('Error: ' . mysqli_error($con));
  }
print_r($_POST);

header('Location: index.php');
?>