<?php
$con = mysql_connect("localhost","cat","123456");

mysql_select_db("my_dd", $con);

$result = mysql_query("SELECT * FROM Books");

if($result)
	 { 
         echo "1"; 
     } 
	 else
	 {
         $sql = "CREATE TABLE Books 
        (
         BookName varchar(15) NOT NULL,
         BookID varchar(6) NOT NULL,
		 Category int，
         PRIMARY KEY(BookID),
		 BookChapter int NOT NULL,
         Count int NOT NULL
        )";
		$b=mysql_query($sql,$con);
		   if($b)
		   echo "表创建成功！<br/>";
	 }
?>