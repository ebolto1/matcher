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

.elements
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
<a href = "objectform.php" > Create Object </a>

<br><br><br><br><br>
<a href="javascript:ddtreemenu.flatten('treemenu1', 'expand')">Expand All</a> | <a href="javascript:ddtreemenu.flatten('treemenu1', 'contact')">Collapse All</a>
<ul id = "treemenu1" class="treeview">
<?php

include_once "connect.php";

$result = mysqli_query($con,"SELECT * FROM objects");

while($objects = mysqli_fetch_array($result))
  {
  
  echo "<li>" . $objects['objectName'];
  $result2 = mysqli_query($con,"SELECT * FROM relations where ID = $objects[objectId]");
  echo "<ul>";
  while($classes = mysqli_fetch_array($result2))
	{  
	
	echo "<li>" . $classes['className']."</li>";
	
	}
	echo "</ul>";
  echo "</li>";
  }
?>
</ul>

<br><br><br><br><br>

<a href = "deleteClass.php" > Delete Class </a> |
<a href = "deleteObject.php" > Delete Object </a>
</div>
<script type="text/javascript">

//ddtreemenu.createTree(treeid, enablepersist, opt_persist_in_days (default is 1))

ddtreemenu.createTree("treemenu1", true)
ddtreemenu.createTree("treemenu2", false)

</script>
</body>

</html>