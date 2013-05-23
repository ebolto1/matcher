<?php

include_once "connect.php";


var_dump($_POST);
mysqli_query($con,"DELETE FROM relations WHERE className='$_POST[relations]'");

echo "Done";

header('Location: index.php');

?>