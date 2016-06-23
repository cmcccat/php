<?php
$con = mysql_connect("localhost","cat","123456");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("my_db", $con);

$result = mysql_query("SELECT * FROM EachBook");

if($result)
	 { 
         ; 
     } 
	 else	 { 
         $sql = "CREATE TABLE EachBook 
        (
         BookName varchar(15) NOT NULL,
         BookID varchar(6) NOT NULL,
         PRIMARY KEY(BookID),
         Chapter1 int NOT NULL，
         Chapter2 int，
         Chapter3 int，
         Chapter4 int，
         Chapter5 int，
         Chapter6 int

        )";
		$b=mysql_query($sql,$con);
		   if($b)
		   echo "表创建成功！<br/>";
	 }
?>