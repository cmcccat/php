<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">

</head>


<body>
    <div class="col-lg-10 col-lg-offset-1">
	<table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                 
				<th style="font-family:Microsoft YAHEI">书名</th>
				<th style="font-family:Microsoft YAHEI">书号</th>
				<th style="font-family:Microsoft YAHEI">章节</th>
				<th style="font-family:Microsoft YAHEI">编辑</th>
                </tr>
                </thead>
                <tbody>
                <?php
				session_start();
				$user=$_SESSION['username'];
                  $con = mysql_connect("localhost","cat","123456");
					if (!$con)
					  {
					  die('Could not connect: ' . mysql_error());
					  }
					  mysql_select_db("my_db", $con);
					  $sql="SELECT BookName,ubook.BookID,ubook.BookChapter
					FROM books,ubook 
					WHERE ubook.userCound='$user' and ubook.BookID=books.BookID
					ORDER BY Count DESC";
					$result = mysql_query($sql,$con);
				while($row = mysql_fetch_array($result))
                {
					 echo "</tr>";
         
                  echo "<td>" .$row['BookName']."</td>";
                  echo "<td>" . $row['BookID'] . "</td>";
                 // echo "<td>" . $row['BookChapter'] . "</td>";
				  echo "<td>" ."<a  target='_top' href='read-home1.php?BookName=".$row['BookName']."&"."Chapter=".$row['BookChapter']."'>".$row['BookChapter']."</a>" . "</td>";
				  echo "<td>" ."<a  target='_top' href='delete.php?BookID=".$row['BookID']."'>"."删除"."</a>" . "</td>";
                 echo "</tr>";
				}
				mysql_close($con);
				?>
 
                </tbody>
            </table>
			</div>

	<?php
	require( 'check.php' );
	?>	
</body>
</html>
