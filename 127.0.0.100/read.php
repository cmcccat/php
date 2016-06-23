<?php
     error_reporting(0); 
	 $read = $_COOKIE['mycookie'];
     $con = mysql_connect("localhost","cat","123456");
     if (!$con)
     {
       die('Could not connect: ' . mysql_error());
     }
     mysql_select_db("my_db", $con);

     $sql="SELECT * FROM Books WHERE BookName='$read'";
     $result = mysql_query($sql,$con);
     $row = mysql_fetch_array($result);
     $b=$row['BookID'];
     $c=$_GET[Chapter];
	 $end=$row['BookChapter'];
	 setcookie('chapter',$_GET[Chapter]);
     setcookie('id',$b);
	 setcookie('end',$end);
	 require('ubook.php');
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="C:\Users\Troy\Documents\在线数字图书馆\favicon.ico" media="screen" />
<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">
</head>

<body style="padding: 10px 100px 10px;" style="font-family:Microsoft YAHEI">

<h1 align="center" style="font-family:Microsoft YAHEI"><?php echo ("书籍名称：" .$read); ?></h>
<?php
$a="$b-$c.txt";
$c="article/".$a;
  $myfile = fopen($c, "r") or die("抱歉，您所阅读的书籍不存在。");
  while(!feof($myfile))
	  {
		  echo "<p style='font-size:14px;font-weight:normal;font-family:Microsoft YAHEI' align='left'>" . fgets($myfile) . "</p>";		  
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
