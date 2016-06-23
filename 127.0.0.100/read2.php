<?php
     $c = $_COOKIE['chapter'];
	 $b = $_COOKIE['id'];
	 $end = $_COOKIE['end'];
	 $d=$c+1;
	 // echo "d=".$d;
	 if($d>$end)
		 $d=$end+1;
     setcookie('chapter',$d);
     setcookie('id',$b);
	 setcookie('end',$end);
	 require('ubook3.php');
?>
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="C:\Users\Troy\Documents\在线数字图书馆\favicon.ico" media="screen" />
<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">
</head>

<body  style="padding: 10px 100px 10px;" style="font-family:Microsoft YAHEI">

<?php
error_reporting(0); 
$con = mysql_connect("localhost","cat","123456");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 mysql_select_db("my_db", $con);
if($c>$end)
	echo "<p style='font-family:Microsoft YAHEI'>已经到底啦！</p>";
	mysql_close($con);
$a="$b-$d.txt";
$d="article/".$a;
//echo $a;
if($c<=$end)
{
  $myfile = fopen($d, "r") or die("抱歉，您所阅读的书籍不存在。");
  while(!feof($myfile))
	  {
		  echo "<p style='font-size:14px;font-weight:normal;font-family:Microsoft YAHEI' align='left'>" . fgets($myfile) . "</p>";
      }
}
fclose($myfile);

mysql_close($con);
?>
<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3">
<ul class="pagination" align="center" style="font-size:14px;font-family:Microsoft YAHEI">
	<li><a href="home.php" target="_top">返回首页</a></li>
	<li><a href="read3.php">上一章节</a></li>
	<li><a href="read2.php">下一章节</a></li>
</ul>
</div>

</body>
</html>
