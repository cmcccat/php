<html>
<head>
<script type="text/javascript">
function startTime()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","time.php?t=" + Math.random(),true);
xmlhttp.send();
t=setTimeout('startTime()',2000);
}
</script>
</head>
<body onload="startTime()">
<div id="myDiv"><h2></h2></div>
</body>
</html>