<html>
<body>
<h1 align="center">文学类排行榜</h>
<?php
$con = mysql_connect("localhost","cat","123456");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("my_dd", $con);
$result = mysql_query("SELECT * FROM Books WHERE Category=1 ORDER BY Count DESC");
echo "<table>
<tr>
<th>书籍名称</th>
<th>书籍号</th>
<th>查阅次数</th>
</tr>";
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['BookName'] . "</td>";
  echo "<td>" . $row['BookID'] . "</td>";
  echo "<td>" . $row['Count'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>
<a href="overview.php">返回首页</a>
</body>
</html>
