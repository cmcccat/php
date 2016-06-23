<meta charset="UTF-8">
<?php
session_start();
$user=$_SESSION['username'];
$a=$_GET['BookID'];
//echo $user."</br>";
//echo $a;
 $con = mysql_connect("localhost","cat","123456");
	if (!$con)
		{
			die('Could not connect: ' . mysql_error());
	    }
 mysql_select_db("my_db", $con);
 $sql="DELETE 
       FROM ubook
       WHERE ubook.userCound='$user' AND ubook.BookID='$a'";
 $result = mysql_query($sql,$con);
 if($result==1)
 {
	 echo "删除成功，几秒后返回用户界面";
	 echo "<script>"."top.location='user.php'; "."</script>";
 }
?>