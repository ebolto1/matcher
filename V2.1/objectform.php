<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head> <title> </title> 


<style>

.object
{
	border: dotted;
	background: beige;
	text-align: center;
	margin-left: auto;
	margin-right: auto;
}

</style>
</head>


<body>

<?php 

if (isset($_GET['Message'])) {
    print '<script type="text/javascript">alert("' . $_GET['Message'] . '");</script>';
}

?>


<div class = "object">
<h1> New Object </h1>
<form action="insertobject.php" method="post">

<b>name:</b> <input type = "text" name ="objectName"><br>
<b>Classes: </b> <br><br>
<?php
include_once "connect.php";

$result = mysqli_query($con,"SELECT * FROM classes");
$counter = 0;
while($classes = mysqli_fetch_array($result))
{
++$counter;
echo "<input type = 'checkbox' value = '".  $classes['className']."'" ."name = '". $classes['className'] ."'>" . $classes['className'];
if($counter % 5 === 0)
{
	echo "<br>";
	echo "<br>";
}

}

?>
<input type ="submit">
<br>
</form>
</div>

</body>


</html>