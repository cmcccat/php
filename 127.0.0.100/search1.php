<?php
     error_reporting(0);
	 setcookie('mycookie',$_GET[BookName]);
?>
<html>
<head>
<script>
  function checkUser(){
  document.getElementById("formid").submit();
}
</script>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ͼ���������</title>

<link rel="shortcut icon" type="image/x-icon" href="C:\Users\Troy\Documents\��������ͼ���\favicon.ico" media="screen" />
<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?php

$con = mysql_connect("localhost","cat","123456");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("my_db", $con);
$a=$_GET['BookName'];
$sql="SELECT * FROM Books
WHERE BookName ='$a'";
$result1 = mysql_query($sql,$con);
$numrows1=mysql_num_rows($result1);  
if ($numrows1==0)
  {
  die('���鼮�����ڣ�');
  }
else
{	
	$row = mysql_fetch_array($result1);
	$sql2="SELECT Count FROM Books
           WHERE BookName='$a'";
    $result2 = mysql_query($sql2,$con);
	$row2 = mysql_fetch_array($result2);
    $sql3=$row2['Count']+1;
	$sql1="UPDATE Books SET Count=$sql3
	       WHERE BookName='$a'";
    $result3 = mysql_query($sql1,$con);	   
}
mysql_close($con)
?>

<nav class="navbar navbar-default navbar-inverse icon-bar">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="#">    &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   </a>
      <img src="img/iconfont-xiaoshuo.png" height="50" width="50" style="position:absolute; left:15px; top:1px; > </div>   
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active" style="font-family:Microsoft YAHEI"><a href="home.php">��ҳ <span class="sr-only">(current)</span></a> </li>
        <li style="font-family:Microsoft YAHEI"><a href="user.php">�û�����</a> </li>
        <li style="font-family:Microsoft YAHEI"><a href="book2.php">ͼ������</a> </li>
        <li style="font-family:Microsoft YAHEI"><a href="league.php">���а�</a> </li>
      	<li style="font-family:Microsoft YAHEI">&nbsp;&nbsp;&nbsp;&nbsp;</li>
</ul>
      
	<form action="search.php" method="post" class="form-horizontal" role="form" style="font-size:15px">
	<div style="padding: 10px 100px 10px;">
 	<div class="col-lg-6">
            <div class="input-group">
               <input type="text" class="form-control" placeholder="����������..." style="font-family:Microsoft YAHEI" name="BookName">
               <span class="input-group-btn">
                  <button class="btn btn-default" type="submit" style="font-family:Microsoft YAHEI;color: #333;background-color: #fff;border-color: #ccc;" onclick = "checkBook()">
                    ����
                  </button>
               </span>
			   </form>
            </div><!-- /input-group -->
         </div><!-- /.col-lg-6 -->
        </div>
	</div>
	<!-- /.navbar-collapse --> 
	</div>
	<!-- /.container-fluid --> 
	</nav>

	
<div class="container" style="font-size:15px;font-family:Microsoft YAHEI">
  <div class="row">
    <div class="col-lg-12">
      <div class="jumbotron">
		</br>
		<p align="center" ><?php echo ("�鼮���ƣ�".$row['BookName']); ?></p>
		<p align="center" ><?php echo ("�鼮�ţ�".$row['BookID']); ?></p>
		<p align="center" ><?php echo ("���鹲��".$row['BookChapter']); echo("���½�");?></p>
    <form action="read-home.php" method="post" class="form-horizontal" role="form" style="font-size:15px">
	<div style="padding: 10px 100px 10px;">
 	<div class="col-lg-2 col-lg-offset-2" style="font-size:17px;">
	�������½ڣ�
	</div>
	<div class="col-lg-6">
            <div class="input-group">
               <input type="int" class="form-control" placeholder="���������Ķ����½�: " style="font-family:Microsoft YAHEI" name="Chapter">
               <span class="input-group-btn">
                  <button class="btn btn-default" type="submit" style="font-family:Microsoft YAHEI;color: #333;background-color: #fff;border-color: #ccc;" onclick = "checkUser()">
                    �Ķ�
                  </button>
               </span>
			   </form>
	</div>  
    </div>
  </div>
</div>

</html>