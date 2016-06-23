<?php
session_start();
error_reporting(0); 
     require('check.php' );
     $user=$_SESSION['username'];
	 $read = $_COOKIE['mycookie'];
	 $c=$_COOKIE['chapter'];
	 $c=$c-1;
	// echo $user." ";
	// echo $read." ";
     $con = mysql_connect("localhost","cat","123456");
     if (!$con)
     {
       die('Could not connect: ' . mysql_error());
     }
     mysql_select_db("my_db", $con);

     $sql="SELECT * FROM Books WHERE BookName='$read'";
     $result = mysql_query($sql,$con);
     $row = mysql_fetch_array($result);
     $b=$row['BookID'];
     $e=$row['Category'];
	 $end=$row['BookChapter'];
	// echo $b." ";
	// echo $c." ";
	// echo $end." ";
	 $sqa="SELECT * FROM ubook 
	 WHERE BookID='$b'and userCound='$user'";
	 $result1 = mysql_query($sqa,$con);
	 $numrows=mysql_num_rows($result1);
	// echo $numrows;
	 if($c>0)
	 {
		// echo "add";
	 if($numrows==0)
	 {
		 $sqb="INSERT INTO ubook (userCound, BookID, BookChapter,Category) 
               VALUES ('$user', '$b', '$c','$e')";
		$result2 = mysql_query($sqb,$con);
	//	if($result2)
	//		echo "ok1!";
	 }
	 else
	 {
		// echo "¹þ¹þ";
		 $sqb="UPDATE ubook
		 SET BookChapter = '$c'
		 WhERE BookID='$b'and userCound='$user'";
		$result2 = mysql_query($sqb,$con);
		//if($result2)
		//	echo "ok2!";
	 }
	 }
?>