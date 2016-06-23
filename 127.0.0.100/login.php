<html>
<head>
<title>登陆成功</title>
<link rel="shortcut icon" type="image/x-icon" href="C:\Users\Troy\Documents\在线数字图书馆\favicon.ico" media="screen" />
<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script>
	function checkBook(){
document.getElementById("formid").submit();
}
</script>
</head>
</head>
<body>
<?php
session_start();
$user=$_POST['userCound'];
$pwd=$_POST['userPasscode'];
require('PasswordHash.php');
 // 初始化散列器为不可移植(这样更安全)
$hasher = new PasswordHash(8, false);
$con = mysql_connect("localhost","cat","123456");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("my_db", $con);

$sql="SELECT * FROM USER
WHERE userCound='$_POST[userCound]'";
$sqa="SELECT * FROM USER
WHERE userPasscode='$_POST[userPasscode]'";
$result1 = mysql_query($sql,$con);
$result2 = mysql_query($sqa,$con);
$numrows1=mysql_num_rows($result1); 
$numrows2=mysql_num_rows($result2); 
if ($numrows1==0)
  {
  die('该账户不存在！');
  }
  $row = mysql_fetch_array($result1);
  $md5=$row['userPasscode'];
  $check = $hasher->CheckPassword($pwd,$md5);
  if(!$check)
  {
  die('您输入的密码不正确！');
  } 
	$_SESSION['username'] = $row['userCound'];
	$user=$_SESSION['username'];
	$sql="UPDATE USER 
	      SET usertime =0
          WHERE userCound='$user'";
		  mysql_query($sql,$con);
mysql_close($con);
?>


  
		</br>
		</br>
	
	
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
	
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="jumbotron">
     	<h1 align="center" style="font-family:Microsoft YAHEI;color: #2ADE72;">登陆成功</h1>
		</br>
		<p align="center" style="font-family:Microsoft YAHEI"><?php echo ("欢迎您 ".$row['userCound']); ?></p>
		</br>
		<p align="center" style="font-family:Microsoft YAHEI"><?php echo ("今天是 " . date("Y/m/d")); ?></p>
		</br>
		</br>
		</br>
		</br>
		</br>
		<div class="col-sm-4 col-md-3 col-lg-4 col-lg-offset-4">
			<a class="btn btn-success btn-lg btn-block" style="font-family:Microsoft YAHEI" href="home.php">回到主页</a>
		</div>
		</br>
		</br>
		</br>
	</div>  
    </div>
  </div>
</div>

</html>