<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head> <title> </title> 


<script> 

function showme()

var s = document.form1.selet1;
var h = document.form1.input1;
if(s.selectedIndex == 1)
{
	h.style.visibility="visible";  
}else{  
h.style.visibility="hidden";  
}  
}  
</script>
</head>
  
<body >  
If I have a select drop down list and a hidden text field. I want the hidden field to show as a text field when I select option2 in the select box, for example:  
<form name="form1">  
<select name ="select1" onchange="showme()">  
<option value="1" selected> option1  
<option value="2"> option2  
<option value="3"> option3  
</select>  
<input type ="text" name="input1" style=" position:relative;visibility:hidden;" value="hello">  
</form>  



</body>

<html>