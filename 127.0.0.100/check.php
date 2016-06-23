<?php 
error_reporting(0); 
session_start();
			$user=$_SESSION['username'];
			if($user=="")
			{
				echo "<script>alert('请先登录！');</script>";
				echo "<script>"."top.location='test.php'; "."</script>";
			}
?>