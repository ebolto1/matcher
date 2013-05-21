<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head> <title> </title>
<script type="text/javascript" src="simpletreemenu.js">

/***********************************************
* Simple Tree Menu- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<link rel="stylesheet" type="text/css" href="simpletree.css" />
<style>
body{
		font-family: Trebuchet MS, Lucida Sans Unicode, Arial, sans-serif;	/* Font to use */
		
	}
.elements
{
	width: 500px;
	text-align: center;
	margin-left: auto;
	margin-right: auto;
}
.table
{
	width: 300px;
	margin-left: auto;
	margin-right: auto;
}
</style>
</head>


<body>
<div class = "elements">
<a href = "classform.php" > Create Class </a> |
<a href = "objectform.php" > Create Object </a>|
<a href = "subform.php" > Create SubObject </a> |
<a href = "subform2.php" > Create Second SubObject </a> |
<a href = "properties.php" > Properties </a> 
</div>
<br><br><br><br><br>
<div class = "table">
<a href="javascript:ddtreemenu.flatten('treemenu1', 'expand')">Expand All</a> | <a href="javascript:ddtreemenu.flatten('treemenu1', 'contact')">Collapse All</a>
<ul id = "treemenu1" class="treeview">
<?php

include_once "connect.php";

$result = mysqli_query($con,"SELECT * FROM objects");

while($objects = mysqli_fetch_array($result))
  {
  
  echo "<li>" . $objects['objectName'];
  $result2 = mysqli_query($con,"SELECT * FROM relations where ID = $objects[objectId]");
  echo  "<ul>";
  while($classes = mysqli_fetch_array($result2))
	{  
	
	echo "<li>" . $classes['className']."</li>";
	
	} 
	
	$result2 = mysqli_query($con,"SELECT * FROM subobject where ID = $objects[objectId]");
 	$join = mysqli_query($con, "SELECT * FROM subrelation AS subrelation INNER JOIN subobject AS subobject ON subobject.subID = subrelation.ID;");
	$objects = mysqli_query($con,"SELECT * from subobject");
	while($subs = mysqli_fetch_array($result2))
	{
		echo "<li>" . $subs['objectName'];
		echo "<ul>";
	while ($class = mysqli_fetch_array($join))
	{ 
		
		if($subs['subID'] == $class['subID'])
		{
			
			echo "<li>" .$class['className']. "</li>"; 
		}
		
		
	}
	mysqli_data_seek($join, 0);
	
	$doublesub = mysqli_query($con,"SELECT * FROM doublesub where subID = $subs[subID]");
	$secondobjects = mysqli_query($con,"SELECT * from doublesub");
	$join2 = mysqli_query($con, "SELECT * FROM doublerelation AS doublerelation INNER JOIN doublesub AS doublesub ON doublesub.id = doublerelation.ID");
	while($subs2 = mysqli_fetch_array($doublesub))
	{
		echo "<li>" . $subs2['subName'];
		echo "<ul>";
		while ($classes2 = mysqli_fetch_array($join2))
		{
			if($subs2['subName'] == $classes2['subName'])
				echo "<li>" . $classes2['className']. "</li>";
		}
	mysqli_data_seek($join2, 0);
		
		echo "</ul>";
		echo "</li>";
	}
	echo "</ul>";
	echo "</li>";
	
  
  }
  echo "</ul>";
  echo "</li>";
}
?>
</ul>

<br><br><br><br><br>
</div>

<div class = "elements">
<a href = "deleteClass.php" > Delete Class </a> |
<a href = "deleteObject.php" > Delete Object </a> |
<a href = "updateObj.php" > Update Object </a> |
<a href = "updateObj2.php" > Update second Subobject </a> |
</div>
<script type="text/javascript">

//ddtreemenu.createTree(treeid, enablepersist, opt_persist_in_days (default is 1))

ddtreemenu.createTree("treemenu1", true)
ddtreemenu.createTree("treemenu2", false)

</script>
</body>
</html>