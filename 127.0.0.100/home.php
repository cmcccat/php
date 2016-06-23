<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>在线数字图书馆</title>

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


<body>
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
        <h1 class="text-center" style="font-family:Microsoft YAHEI">在线数字图书馆</h1>
        <div class="row">
          <div class="col-lg-1 col-lg-offset-5 col-sm-3 col-xs-offset-3 col-xs-3 col-md-offset-4 col-md-2">
            <p><a class="btn btn-success btn-lg" href="test.php" role="button" style="font-family:Microsoft YAHEI">登录</a></p>
          </div>
          <div class="col-lg-2 col-sm-6 col-md-2 col-md-offset-0">
            <p><a class="btn btn-primary btn-lg" href="zc.php" role="button" style="font-family:Microsoft YAHEI">注册</a> </p>
          </div>
        </div>
        <p class="text-center" style="font-family:Microsoft YAHEI">欢迎来到在线数字图书馆</p>
        <img src="img/1200X400.gif" alt="" class="img-responsive"> </div>
    </div>
  </div>
</div>



<div class="container">
  <div class="row">
    <!--
	<div class="col-lg-3 col-md-6 col-sm-6">
      <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Lorem ipsum</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis accusamus praesentium eveniet ad unde doloremque ex officia eius ab quibusdam.</p>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
      <h2><span class="glyphicon glyphicon-music" aria-hidden="true"></span> Lorem ipsum</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, mollitia natus amet eligendi consequuntur. Veritatis ullam debitis voluptas repellat laboriosam.</p>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
      <h2><span class="glyphicon glyphicon-screenshot" aria-hidden="true"></span> Lorem ipsum</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, error, itaque non vel architecto ratione obcaecati doloribus delectus illum harum?</p>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
      <h2><span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span> Lorem ipsum</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, nam voluptate accusantium nulla distinctio odit aliquam voluptatem ab. Earum, voluptatibus.</p>
    </div>
	-->
  </div>
</div>

<section class="well">
<h2 class="text-center" style="font-family:Microsoft YAHEI" align="left">视频</h2>
<p style="font-family:Microsoft YAHEI;font-size:13px;text-align: center;" >世界读书日公益宣传广告</p>
<hr>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="embed-responsive embed-responsive-16by9">
		  <iframe height=400 width=450 src="http://player.youku.com/embed/XNDg4NTY2MDAw" frameborder=0 allowfullscreen></iframe>
		 <!-- <iframe class="embed-responsive-item" src=""http://player.youku.com/embed/XNDg4NTY2MDAw"></iframe> -->
        </div>
      </div>
    </div>
  </div>
</section>



<div class="container">
  <div class="row">
<div class="col-lg-4 col-md-6 col-sm-6" style="font-family:Microsoft YAHEI">
      <h2>联系我们</h2>
      <address>
      <strong>西安电子科技大学</strong><br>
      陕西省西安市长安区西沣路266号<br>
      <abbr title="Phone">电话:</abbr> (029) 81890000
      </address>
      <h4>社交网络</h4>
      <div class="row">
      	<div class="col-xs-2"><img class="img-circle" src="img/32X32-1.gif" alt=""></div>
      	<div class="col-xs-2"><img class="img-circle" src="img/32X32-2.gif" alt=""></div>
      
      </div>
    </div>
    
	<div class="col-lg-2 col-md-4 col-sm-4">
	<!--
      <h2>Testimonials</h2>
      <div class="media">
        <div class="media-left"> <a href="#"> <img class="media-object" src="img/35X35.gif" alt="..."> </a> </div>
        <div class="media-body">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. </div>
      </div>
      <div class="media">
        <div class="media-left"> <a href="#"> <img class="media-object" src="img/35X35.gif" alt="..."> </a> </div>
        <div class="media-body">
          <h4 class="media-heading">Media heading</h4>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. </div>
      </div>
	  -->
    </div>
	
    <div class="col-lg-4 col-sm-12" style="font-family:Microsoft YAHEI">
      <h2>关于我们</h2>
      <p>我们是1303028班的高铖涛、张镇、郭尚朋</p>
      <p>感谢您的浏览！</p>
    </div>
  </div>
</div>
  <hr>
<footer class="text-center" style="font-family:Microsoft YAHEI">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © 在线数字图书馆   All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.2.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>
