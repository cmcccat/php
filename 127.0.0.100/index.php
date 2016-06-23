<html>
<body>
<?php
$con = mysql_connect("localhost","cat","123456");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

//Create database
$a=mysql_select_db("my_db", $con);
if(!$a)
{
if (mysql_query("CREATE DATABASE my_db CHARACTER SET utf8 COLLATE utf8_general_ci",$con))
  {
  //echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }
}
// Create table in my_db database
require( dirname(__FILE__) . '/usertable.php' );
mysql_select_db("my_db", $con);
$result = mysql_query("SELECT * FROM user");

/*echo "<table>
<tr>
<th>账户</th>
<th>密码</th>
<th>余额</th>
<th>时间</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['userCound'] . "</td>";
  echo "<td>" . $row['userPasscode'] . "</td>";
  echo "<td>" . $row['userbalance'] . "</td>";
    echo "<td>" . $row['usertime'] . "</td>";
  echo "</tr>";
  }
echo "</table>";*/	
mysql_close($con);
echo "<script>"."window.location.href='/home.php';"."</script>";
//require( dirname(__FILE__) . '/home.php' );
?>
	
</body>
</html>