    <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">  
    <html>  
    <head>  
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">  
    <title>欢迎您的到来</title> 
    <script src="/scripts/jquery.min.js"></script>
    <script  src="/bootstrap/js/bootstrap.min.js"></script>
	<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script>
	function checkUser(){
   var result = document.getElementById("uct").value;
   var password = document.getElementById("pwd").value;
   var password1= document.getElementById("pwd1").value;
   var code1= document.getElementById("code").value;
   if(result == ""|| password == ""||password1 == ""||code == "" ){
     alert("请确认信息完整");
     return false;
   }
  document.getElementById("formid").submit();
}
</script>
    </head>  
    <body bgcolor="aliceblue"> 

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
	
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="jumbotron">
     	<h1 align="center" style="font-family:Microsoft YAHEI;color: #2ADE72;">注册页面</h1>
		</br>

    <form method="post" action="regcheck.php" class="form-horizontal" role="form" style="font-size:15px">  	
   <div class="form-group">
      <label for="uct" class="col-sm-2  control-label" style="font-family:Microsoft YAHEI;color: #2ADE72;">用户名</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="uct" style="font-family:Microsoft YAHEI" placeholder="用户名5-9个英文和数字，字母不区分大小写">
      </div>
  </div>
    <div class="form-group">
      <label for="pwd" class="col-sm-2  control-label" style="font-family:Microsoft YAHEI;color: #2ADE72;">密码</label>
      <div class="col-sm-8">
        <input type="password" class="form-control" name="pwd" style="font-family:Microsoft YAHEI"  placeholder="密码5-9个英文和数字，字母不区分大小写">
      </div>
  </div>
    <div class="form-group">
      <label for="pwd1" class="col-sm-2  control-label" style="font-family:Microsoft YAHEI;color: #2ADE72;">确认密码</label>
      <div class="col-sm-8">
        <input type="password" class="form-control" name="pwd1" style="font-family:Microsoft YAHEI"  placeholder="请确保两次密码一致">
      </div>
  </div>
    <div class="form-group">
      <label for="code" class="col-sm-2  control-label" style="font-family:Microsoft YAHEI;color: #2ADE72;">请输入验证码</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="code" style="font-family:Microsoft YAHEI"  placeholder="点击图片可以切换验证码">
      </div>
	  <img id="sry" onclick="changing();" src='1.php' />
  </div>
  <div class="form-group">
     <div class="col-sm-4 col-md-3 col-lg-3 col-lg-offset-2 ">
        <button type="submit" class="btn btn-default" onclick = "checkUser()" style="font-family:Microsoft YAHEI;">注册</button>
	</div>
	<div class="col-sm-4 col-md-4 col-lg-3">
	   <button type="reset" class="btn btn-default" style="font-family:Microsoft YAHEI">清除</button>
	</div>
	<div class="col-sm-4 col-md-4 col-lg-4">
         <a href="test.php" style="font-size:15px"><button type="button" class="btn btn-default" style="font-family:Microsoft YAHEI;">登陆界面</button></a>
    </div>
   </div>           
    </form>
	</div>  
    </div>
  </div>
</div>
	
	
	<!--
	<div class="container">	
	<div class="row">
	<div class="col-sm-12 col-md-12 col-lg-12" >
	<h1 align="center">注册页面</h1>
    <form method="post" action="regcheck.php" class="form-horizontal" role="form" style="font-size:15px">  	
   <div class="form-group">
      <label for="uct" class="col-sm-2  control-label">用户名</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="uct"  placeholder="用户名5-9个英文和数字，字母不区分大小写">
      </div>
  </div>
    <div class="form-group">
      <label for="pwd" class="col-sm-2  control-label">密码</label>
      <div class="col-sm-8">
        <input type="password" class="form-control" name="pwd"  placeholder="密码5-9个英文和数字，字母不区分大小写">
      </div>
  </div>
    <div class="form-group">
      <label for="pwd1" class="col-sm-2  control-label">确认密码</label>
      <div class="col-sm-8">
        <input type="password" class="form-control" name="pwd1"  placeholder="请确保两次密码一致">
      </div>
  </div>
    <div class="form-group">
      <label for="code" class="col-sm-2  control-label">请输入验证码</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="code"  placeholder="点击图片可以切换验证码">
      </div>
	  <img id="sry" onclick="changing();" src='1.php' />
  </div>
  <div class="form-group">
       <div class="col-sm-4 col-md-3 col-lg-2 col-lg-offset-3 ">
        <button type="submit" class="btn btn-default" onclick = "checkUser()">注册</button>
      </div>
	  <div class="col-sm-4 col-md-3 col-lg-2">
	   <button type="reset" class="btn btn-default" >清除</button>
	  </div>
	   <div class="col-sm-4 col-md-3 col-lg-2">
         <a href="test.php" style="font-size:15px"><button type="button" class="btn btn-default">登陆界面</button></a>
      </div>
   </div>           
    </form>
	</div>
    </div>	
	</div>
	-->
    </body>
	
<script>
function changing(){
    document.getElementById('sry').src="1.php?"+Math.random();
} 
</script>	
    </html>  