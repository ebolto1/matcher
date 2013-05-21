<?php
ob_start();
include_once "connect.php";


$subQuery = mysqli_query ($con, "SELECT id FROM doublesub WHERE subName ='$_POST[object]'");
$sub = mysqli_fetch_assoc($subQuery);

if(!is_null($sub))
{
$query2 = mysqli_query($con,"Select * from classes");
while($classes = mysqli_fetch_array($query2))
{
	$name = "$classes[className]";
	if ($classes['className'] == "$_POST[$name]")
	{
		$insert = "Insert into doublerelation (ID, className,subName) values ($sub[id],'$name','$_POST[object]')";
		mysqli_query($con,$insert);	
		}

}
}




header ('Location: index.php');
ob_flush();
?>