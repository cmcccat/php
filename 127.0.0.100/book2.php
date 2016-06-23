<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>图书中心</title>

<link rel="shortcut icon" type="image/x-icon" href="C:\Users\Troy\Documents\在线数字图书馆\favicon.ico" media="screen" />
<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

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
        <li style="font-family:Microsoft YAHEI"><a href="home.php">首页</a> </li>
        <li style="font-family:Microsoft YAHEI"><a href="user.php">用户中心</a> </li>
        <li class="active"  style="font-family:Microsoft YAHEI"><a href="book2.php">图书中心</a>
         <span class="sr-only">(current)</span> </li>
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
    <h1 align="center" style="font-family:Microsoft YAHEI">图书中心</h1>
    <hr>
    <div class="col-lg-10 col-sm-6 col-lg-offset-1">
      <div class="panel panel-default panel-success"> 
        <!-- Default panel contents -->
       
        <!-- Table -->
        <table class="table">
          <thead>
            <tr>
              <th> </th>
            </tr>
          </thead>
			<?php
			$con = mysql_connect("localhost","cat","123456");
           if (!$con)
           {
             die('Could not connect: ' . mysql_error());
           }
             mysql_select_db("my_db", $con);
            $result = mysql_query("SELECT * FROM Books");
			    while($row = mysql_fetch_array($result))
                {
				  
				  echo "</tr>";
                  echo "<td>" . "<p align='center'>"."<a href='search1.php?BookName=".$row['BookName']."'>".$row['BookName']."</a>"."</p>" . "</td>";
                 echo "</tr>";
				}
				mysql_close($con);
				?>
	
          <!--  <tr>
              <th scope='row' >1 ......</th>
            </tr>
            <tr>
              <th scope='row'>2 ......</th>
            </tr>
            <tr>
              <th scope='row'>3 ......</th>
            </tr>
			?>
            <tr>-->
            </tr>

        </table>
      </div>
    </div>
<!--
	<div class="col-lg-3 col-sm-6">
      <div class="panel panel-default panel-warning"> 
        
        <div class="panel-heading">
          <h3 >浪漫散文</h3>
        </div>
      
        <table class="table">
          <thead>
            <tr>
              <th> </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1 ......</th>
            </tr>
            <tr>
              <th scope="row">2 ......</th>
            </tr>
            <tr>
              <th scope="row">3 ......</th>
            </tr>
            <tr>
              <th scope="row"><p class="text-center"><a href="" class="btn-warning btn"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> 立即阅读</a></p>
              </th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  
  <div class="col-lg-3 col-sm-6">
      <div class="panel panel-default panel-info"> 
     
        <div class="panel-heading">
          <h3>专业学术</h3>
        </div>
  
        <table class="table">
          <thead>
            <tr>
              <th> </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1 ......</th>
            </tr>
            <tr>
              <th scope="row">2 ......</th>
            </tr>
            <tr>
              <th scope="row">3 ......</th>
            </tr>
            <tr>
              <th scope="row"><p class="text-center"><a href="" class="btn-info btn"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> 立即阅读</a></p></th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
   
   <div class="col-lg-3 col-sm-6">
      <div class="panel panel-default panel-danger"> 
  
        <div class="panel-heading">
          <h3>历史文献</h3>
        </div>

        <table class="table">
          <thead>
            <tr>
              <th> </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1 ......</th>
            </tr>
            <tr>
              <th scope="row">2 ......</th>
            </tr>
            <tr>
              <th scope="row">3 ......</th>
            </tr>
            <tr>
              <th scope="row"><p class="text-center"><a href="" class="btn-danger btn"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> 立即阅读</a></p></th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
-->
	<?php
	require( 'check.php' );
	?>	

<body>
</body>
</html>
