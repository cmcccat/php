<html>
<body>
<h1 align="center">ȫ���鼮</h>
<?php
$con = mysql_connect("localhost","cat","123456");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("my_db", $con);
$result = mysql_query("SELECT * FROM Books");
echo "<table>
<tr>
<th>�鼮����</th>
<th>�鼮��</th>
<th>���Ĵ���</th>
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
<a href="overview.php">������ҳ</a>
</body>
</html>
