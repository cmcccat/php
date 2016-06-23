<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="/scripts/jquery.min.js"></script>
<script  src="/bootstrap/js/bootstrap.min.js"></script>
<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="C:\Users\Troy\Documents\在线数字图书馆\favicon.ico" media="screen" />
<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">
<script>
	/*function checkUser(){
   var result = document.getElementById("userCound").value;
    alert(result);
   if(result==""){
     alert("用户名不能为空");
     return false;
   }
   else
  document.getElementById("formid").submit();
}*/
</script>
</head>
<body style="font-family:Microsoft YAHEI">



 <div class="container">	
	<div class="row">
	<div class="col-sm-12 col-md-12 col-lg-12" >
<h1 align="center">图书馆充值界面</h>
<div class="col-sm-12 col-md-12 col-lg-12" >
</br>
</div>
<form action="recharge.php" method="post"  class="form-horizontal" role="form" style="font-size:20px">
<div class="form-group">
      <label for="userCound" class="col-sm-2  control-label">账号</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="userCound"  placeholder="请填写要充值的账户">
      </div>
  </div>
  <div class="form-group">
  <div class="radio">
   <label>
      <input type="radio" checked="checked" name="charge" value=10 checked>充值10元
   </label>
</div>
<div class="radio">
   <label>
      <input type="radio" name="charge"  value=value=50>充值50元
   </label>
</div>
<div class="radio">
   <label>
      <input type="radio" name="charge" value=100>充值100元
   </label>
</div>
</div>
 <div class="form-group">
       <div class="col-sm-4 col-md-3 col-lg-2 col-lg-offset-5 col-md-offset-5 ">
        <button type="submit" class="btn btn-default" onclick = "checkUser()">确定充值</button>
      </div>
   </div>
</form>
 <div class="col-sm-4 col-md-3 col-lg-2 col-lg-offset-5 col-md-offset-5">
         <a href="test.php" style="font-size:15px"><button type="button" class="btn btn-default">返回登陆界面</button></a>
      </div>   
</div>
</div>
</div>
</body>
</html>