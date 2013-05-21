<html>
<head> <title> </title> 

<script type="text/javascript">
function chkit(uid, chk) {
   chk = (chk==true ? "1" : "0");
   var url = "check_validate.php?userid="+uid+"&chkYesNo="+chk;
   if(window.XMLHttpRequest) {
      req = new XMLHttpRequest();
   } else if(window.ActiveXObject) {
      req = new ActiveXObject("Microsoft.XMLHTTP");
   }
   // Use get instead of post.
   req.open("GET", url, true);
   req.send(null);
}
</script>


</head> 


<body>

<?php
include_once "connect.php";

$Objquery = mysqli_query ($con, "Select * from objects");
$classquery = mysqli_query ($con, "Select * from classes");
echo "<table border = '1'>";
echo "<tr>";
echo "<td>". " ". "</td>";
while ($classes = mysqli_fetch_array($classquery))
{
	
	echo "<td>". $classes['className']. "</td>";
	
	
}
echo "</tr>";
while ($objects = mysqli_fetch_array($Objquery))
{
	echo "<tr>";
	echo "<td>".$objects['objectName']."</td>";
	echo "</tr>";
}
echo "</table>";
?>

</body>
</html>