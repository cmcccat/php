<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>在线数字图书馆-登录</title>

	<link rel="shortcut icon" type="image/x-icon" href="C:\Users\Troy\Documents\在线数字图书馆\favicon.ico" media="screen" />
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
    
	<link rel="stylesheet" href="NivoSlider/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="NivoSlider/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="NivoSlider/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="NivoSlider/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="NivoSlider/nivo-slider.css" type="text/css" media="screen" /> 
	
	<!-- Loading Bootstrap 
    <link href="dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Loading Flat UI 
    <link href="dist/css/flat-ui.css" rel="stylesheet">
    <link href="docs/assets/css/demo.css" rel="stylesheet">
	-->
   

	
	<script src="/scripts/jquery.min.js"></script>
    <script  src="/bootstrap/js/bootstrap.min.js"></script>
	<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src="NivoSlider/scripts/jquery.min.js"></script>
    <script type="text/javascript" src="NivoSlider/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
	<script>
	function checkUser(){
   var result = document.getElementById("userCound").value;
   var password = document.getElementById("userPasscode").value;

   if(result == ""  ){
     alert("用户名不能为空");
     return false;
   }
   if(password == ""  ){
    alert("密码不能为空");
     return false;
   }
  document.getElementById("formid").submit();
}
</script>
</head>

<body bgcolor="#16a085 ">

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
        <li class="active" style="font-family:Microsoft YAHEI"><a href="home.php">首页 <span class="sr-only">(current)</span></a> </li>
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
                  <button class="btn btn-default" type="submit" style="font-family:Microsoft YAHEI;color: #333;background-color: #fff;border-color: #ccc;" onclick = "checkBook()">
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

<body style="background-color:#828282" style="font-family:Microsoft YAHEI">
	<div  style="background-color:#D6D6D6">
	<div class="container" >
	<div class="row">
	<div class="col-sm-12 col-md-12 col-lg-12" >
		</br>
	</div>
	</div>
	<div class="row">
	 <div class="col-sm-4 col-md-4 col-lg-8" >
	 <div id="wrapper">
		   <div class="slider-wrapper theme-default"  style="font-family:Microsoft YAHEI">
				<div id="slider" class="nivoSlider" style="font-family:Microsoft YAHEI">
					<img src="images/1.jpg" data-thumb="images/1.jpg"  alt="" title="欢迎来到在线数字图书馆" />
					<a href="http://www.bilibili.com"><img src="images/2.jpg" data-thumb="images/2.jpg" alt="" title="这是通向bilibili的链接" /></a>
					<img src="images/3.jpg"  data-thumb="images/3.jpg"  alt=""  title="欢迎来到在线数字图书馆" data-transition="slideInLeft" />
					<img src="images/4.jpg"  data-thumb="images/4.jpg"  alt="" title="欢迎来到在线数字图书馆" />
					<img src="images/5.jpg"  data-thumb="images/5.jpg"  alt="" title="欢迎来到在线数字图书馆" />
					<img src="images/6.jpg"  data-thumb="images/6.jpg"  alt="" title="欢迎来到在线数字图书馆" />
					<img src="images/7.jpg"  data-thumb="images/7.jpg"  alt="" title="欢迎来到在线数字图书馆" />
				</div>
				<div id="htmlcaption" class="nivo-html-caption">
					<strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
				</div>
			</div>
	  </div>
	 </div>

 

    <div class="col-sm-8 col-md-8 col-lg-4">
	  <div style="background-color:#edeff1;padding:24px 23px 20px;position: relative;border-radius: 6px">
		<div class="row">
          <div class="login-form">
			</br>
			<p align="center" style="font-family:Microsoft YAHEI;font-size:30px">欢迎登录</p>
			</br>
			</br>

			
			<form action="login.php" method="post" class="form-horizontal" role="form" style="font-size:15px">
			<div class="form-group">
			  <label for="userCound" class="col-sm-1  control-label"></label>
			  <div class="col-sm-10 ">
				 <input type="text" class="form-control" name="userCound"  style="font-family:Microsoft YAHEI" placeholder="请输入账号">
			   </div>
			</div>
			<div class="form-group">
			  <label for="userPasscode" class="col-sm-1 control-label"></label>
			  <div class="col-sm-10 ">
				 <input type="Password" class="form-control" name="userPasscode"  style="font-family:Microsoft YAHEI" placeholder="请输入密码">
			  </div>
			</div>
			<div class="col-sm-10 col-sm-offset-1">
            
			<button type="submit" class="btn btn-primary btn-large btn-block" onclick = "checkUser()" style="font-family:Microsoft YAHEI">登录</button>
			</div>
            <!--<a class="login-link" href="#">Lost your password?</a>-->
			</br>
			</br>
			</br>
			</form>
				
			<div class="col-sm-4 col-md-3 col-lg-5 col-sm-offset-1 ">
			<a class="btn btn-success btn-large btn-block" style="font-family:Microsoft YAHEI" href="zc.php">注册</a>
			</div>

			<div class="col-sm-4 col-md-3 col-lg-5 ">
			<a class="btn btn-success btn-large btn-block" style="font-family:Microsoft YAHEI" href="recharge.html">充值</a>
			</div>
			</br>
			</br>
			</br>
			</br>
			</br>
          </div>
        </div>
		</div>
      </div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>

