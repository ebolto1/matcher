<?php

include_once "connect.php";


function redirect($Message)
{
	header('Location: classform.php?Message='.urlencode($Message));	
}
var_dump($_POST);

$text = $_POST['className1'];
$text2 = $_POST['className2'];
$text3 = $_POST['className3'];
$text4 = $_POST['className4'];
$text5 = $_POST['className5'];

$note = " ";

if(!empty($text)){
$query = mysqli_query($con,"Select classId from classes where className ='$_POST[className1]'");
if(mysqli_num_rows($query) == 0) 
{
$insert = "Insert into classes (className,Description) values ('$_POST[className1]', '$_POST[description1]')";
mysqli_query($con,$insert);
}
else 
{	
	$note .= "The class name(s) ".$_POST['className1'];
}}


if(!empty($text2))
{
$query = mysqli_query($con,"Select classId from classes where className ='$_POST[className2]'");
if(mysqli_num_rows($query) == 0) 
{
$insert2 = "Insert into classes (className,Description) values ('$_POST[className2]','$_POST[description2]')";
mysqli_query($con,$insert2);
}
else 
{	
	$note .= " " . $_POST['className2'];
}}


if(!empty($text3)){
$query = mysqli_query($con,"Select classId from classes where className ='$_POST[className3]'");
if(mysqli_num_rows($query) == 0) 
{
$insert3= "Insert into classes (className,Description) values ('$_POST[className3]', '$_POST[description3]')";
mysqli_query($con,$insert3);
}
else 
{	
	$note .= " " . $_POST['className3'];
}}


if(!empty($text4)){
$query = mysqli_query($con,"Select classId from classes where className ='$_POST[className4]'");
if(mysqli_num_rows($query) == 0) 
{
$insert4 = "Insert into classes (className,Description) values ('$_POST[className4]', '$_POST[description4]')";
mysqli_query($con,$insert4);
}
else 
{	
	$note .= " " . $_POST['className4'];
}}

if(!empty($text5)){
$query = mysqli_query($con,"Select classId from classes where className ='$_POST[className5]'");
if(mysqli_num_rows($query) == 0) 
{
$insert5 = "Insert into classes (className,Description) values ('$_POST[className5]','$_POST[description5]')"; 
mysqli_query($con,$insert5);  
}
else 
{	
	$note .= " " . $_POST['className5'];
}}
$note .= " " . " already exist";
redirect($note);
?>