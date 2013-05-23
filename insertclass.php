<?php

include_once "connect.php";
var_dump($_POST);

$text = $_POST['className1'];
$text2 = $_POST['className2'];
$text3 = $_POST['className3'];
$text4 = $_POST['className4'];
$text5 = $_POST['className5'];


if(!empty($text)){
$insert = "Insert into classes (className) values ('$_POST[className1]')";
mysqli_query($con,$insert);
}
if(!empty($text2)){
$insert2 = "Insert into classes (className) values ('$_POST[className2]')";
mysqli_query($con,$insert2);
}
if(!empty($text3)){
$insert3= "Insert into classes (className) values ('$_POST[className3]')";
mysqli_query($con,$insert3);
}
if(!empty($text4)){
$insert4 = "Insert into classes (className) values ('$_POST[className4]')";
mysqli_query($con,$insert4);
}
if(!empty($text5)){
$insert5 = "Insert into classes (className) values ('$_POST[className5]')"; 
mysqli_query($con,$insert5);  
}

header('Location: classform.php');
?>