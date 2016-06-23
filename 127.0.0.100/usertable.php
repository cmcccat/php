<?php
$con = mysql_connect("localhost","cat","123456");
mysql_select_db("my_db", $con);
$result = mysql_query("SELECT * FROM USER");
     if($result)
	 { 
       //  echo "表已经存在！"; 
     } 
	 else
	 { 
         $sql = "CREATE TABLE USER
               (
                   ID int NOT NULL AUTO_INCREMENT, 
				   userCound varchar(15) unique,
                   userPasscode varchar(70),
                   userbalance int default 10,
				   usertime int default 0,
				   PRIMARY KEY(ID,userCound)
                )";
           $b=mysql_query($sql,$con);
     $sqa = "CREATE TABLE Books 
        (
         BookName varchar(15),
         BookID varchar(6),
	     Category int default 0,
	     BookChapter int default 0,
         Count int default 0,
	     PRIMARY KEY(BookID)
        )";
		$c=mysql_query($sqa,$con);
		$sqc = "CREATE TABLE Ubook 
        (
         userCound varchar(15),
         BookID varchar(6),
	     BookChapter int default 0,
	     PRIMARY KEY(userCound,BookID),
		 FOREIGN KEY (userCound) REFERENCES USER(userCound)ON UPDATE CASCADE,
		 FOREIGN KEY (BookID) REFERENCES Books(BookID)ON UPDATE CASCADE
        )";
		$d=mysql_query($sqc,$con);
		   if($b)
		   echo "表创建成功！<br/>";
		   if($c)
		   echo "表创建成功！<br/>";
	       if($d)
		   echo "表创建成功！<br/>";
	 }

?>