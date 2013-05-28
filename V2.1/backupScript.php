<?php

include_once "connect.php";

$result = mysqli_query($con,"SELECT * FROM objects");
//$result2 = mysqli_query($con,"SELECT * FROM relations");


echo "<table border='1'>
<tr>
<th>Object name</th>
<th>Classes</th>
</tr>";

while($objects = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $objects['objectName'] . "</td>";
  $result2 = mysqli_query($con,"SELECT * FROM relations where ID = $objects[objectId]");
  while($classes = mysqli_fetch_array($result2))
	{  
  echo "<td>" . $classes['className'] . "</td>";
  }
  echo "</tr>";
  }
echo "</table>";

?>