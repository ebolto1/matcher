<?php
include_once "connect.php";

$objects = mysqli_query($con,"SELECT * from subobject");

$join = mysqli_query($con, "SELECT * FROM subrelation AS subrelation INNER JOIN subobject AS subobject ON subobject.subId = subrelation.ID;");


print_r($join);
$curr_objectName = '';

echo '<ul>';
while($obj = mysqli_fetch_array($objects))
{
	echo "<li>" . $obj['objectName']; 
	
	echo "<ul>";
	
	
	while ($class = mysqli_fetch_array($join))
	{
		//var_dump($class);
		if($obj['objectName'] == $class['subName'])
			echo "<li>" . $class['className']. "</li>";
		
		
	}
	mysqli_data_seek($join, 0);
	
	echo "</ul>";
}
echo "</ul>";

?>	
