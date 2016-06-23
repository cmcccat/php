<!DOCTYPE html>
<html>

<head>
<?php
	require( 'check.php' );
?>
<meta charset="UTF-8">
<title>侧边栏</title>
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
<link rel="shortcut icon" type="image/x-icon" href="C:\Users\Troy\Documents\在线数字图书馆\favicon.ico" media="screen" />
<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>

		</br>
		</br>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="jumbotron"> 	
  <div class="form-group">
	<label for="uct" class="col-sm-2  control-label" style="font-family:Microsoft YAHEI">用户名</label>
		<?php
	      session_start();
		  $user=$_SESSION['username'];
	     $con = mysql_connect("localhost","cat","123456");
	     if (!$con)
	     {
	     die('Could not connect: ' . mysql_error());
	     }
	     mysql_select_db("my_db", $con);
	      $result = mysql_query("SELECT * FROM User
          WHERE userCound='$user'");
		 $row = mysql_fetch_array($result);
			echo $row['userCound'];
		?>
  </div>
    <div class="form-group">
      <label for="pwd" class="col-sm-2  control-label" style="font-family:Microsoft YAHEI">余额</label>
	  <?php echo $row['userbalance']; ?>
  </div>
	<br>  
	<br>   
	<br>
	<br>
	<br>
	<br>
	</div>  
    </div>
  </div>
</div>

</body>

</html>