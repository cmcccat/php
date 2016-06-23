<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>充值页面</title>
<link rel="shortcut icon" type="image/x-icon" href="C:\Users\Troy\Documents\在线数字图书馆\favicon.ico" media="screen" />
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
$sql="SELECT userCound 
      FROM USER
      WHERE userCound='$_POST[userCound]'";
$result = mysql_query($sql,$con);
$numrows=mysql_num_rows($result); 
if ($numrows==0)
  {
  echo"<script>alert('该账户不存在！'); history.go(-1);</script>";
  }
else
{
	$sql="SELECT userbalance 
		        FROM USER
                WHERE userCound='$_POST[userCound]'";
		  $result = mysql_query($sql,$con);
    $row = mysql_fetch_array($result);
	$charge = $row['userbalance']+$_POST['charge'];
	$sql="UPDATE USER 
	      SET userbalance ='$charge'
          WHERE userCound='$_POST[userCound]'";
		  $result = mysql_query($sql,$con);
		  if (!$result)
          {
              echo"<script>alert('充值失败！'); history.go(-1);</script>";
          }
		  $sql="SELECT * 
		        FROM USER
                WHERE userCound='$_POST[userCound]'";
		  $result = mysql_query($sql,$con);
		  $row= mysql_fetch_array($result);
		  
	
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
        <li style="font-family:Microsoft YAHEI"><a href="home.php">首页 </a> </li>
        <li style="font-family:Microsoft YAHEI"><a href="user.php">用户中心</a> </li>
        <li style="font-family:Microsoft YAHEI"><a href="book2.php">图书中心</a> </li>
        <li style="font-family:Microsoft YAHEI"><a href="league.php">排行榜</a> </li>
      	<li style="font-family:Microsoft YAHEI">&nbsp;&nbsp;&nbsp;&nbsp;</li>
</ul>

	<form action="search.php" method="post" class="form-horizontal" role="form" style="font-size:15px">
	<div style="padding: 10px 100px 10px;">
 	<div class="col-lg-6">
            <div class="input-group">
               <input type="text" class="form-control" placeholder="请输入书名..." style="font-family:Microsoft YAHEI" name="BookName">
               <span class="input-group-btn">
                  <button class="btn btn-default" type="submit" style="font-family:Microsoft YAHEI" onclick = "checkBook()">
                    搜索
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

<div class="container" style="font-family:Microsoft YAHEI">
  <div class="row">
    <div class="col-lg-12">
      <div class="jumbotron">
     	<h1 align="center" style="font-family:Microsoft YAHEI">充值成功</h1>
		</br>
		<p align="center" ><?php echo ("欢迎您 ".$row['userCound']); ?></p>
		<p align="center"><?php echo ("您的余额为" .$row['userbalance'] ); ?></p>
		<a href="test.php">请点击该连接回到登陆界面</a>
	  </div>  
    </div>
  </div>
</div>


<!--
<div style="font-size:15px">
<h4 align="center">充值成功</h>
<p align="center" ><?php echo ("欢迎您 ".$row['userCound']); ?></p>
<p align="center"><?php echo ("您的余额为" .$row['userbalance'] ); ?></p>
<a href="test.php">请点击该连接回到登陆界面</a>
</div>
-->

</html>