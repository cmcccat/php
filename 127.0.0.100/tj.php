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
				<th style="font-family:Microsoft YAHEI">借阅次数</th>
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
					  $sql="SELECT Category,count(*) as his
					  FROM ubook 
					  WHERE userCound='$user' 
					  group by Category
					  ORDER BY his DESC";
					$result = mysql_query($sql,$con);
					$row = mysql_fetch_array($result);
					$a=$row['Category'];
					//echo $a;
					$sqa="SELECT * 
					FROM Books 
					WHERE Category='$a' and BookID NOT IN(
					SELECT BookID
					FROM ubook 
					WHERE userCound='$user' 
					)
					ORDER BY Count DESC";
					$result1 = mysql_query($sqa,$con);
				while($row = mysql_fetch_array($result1))
                {
				 echo "</tr>";
                  echo "<td>" ."<a  target='_top' href='read-home1.php?BookName=".$row['BookName']."&"."Chapter=1'>".$row['BookName']."</a>" . "</td>";
                 // echo "<td>" . "<p>"."<a href='search1.php?BookName=".$row['BookName']."'>".$row['BookName']."</a>"."</p>" . "</td>";
                  echo "<td>" . $row['BookID'] . "</td>";
                  echo "<td>" . $row['Count'] . "</td>";				
                 echo "</tr>";
				}
				?>
				
 
                </tbody>
            </table>
			</div>

	<?php
	require( 'check.php' );
	?>	
</body>
</html>
