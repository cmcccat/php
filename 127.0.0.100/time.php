<?php
session_start();
$user=$_SESSION['username'];
$con = mysql_connect("localhost","cat","123456");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
else
{
	mysql_select_db("my_db", $con);
    $sql="SELECT usertime 
          FROM USER
          WHERE userCound='$user'";
		  $result = mysql_query($sql,$con);
    $row = mysql_fetch_array($result);
	$time= $row['usertime'];
	if ($time==0)
	{
		$t=time();
	    $sql="UPDATE USER 
	      SET usertime ='$t'
          WHERE userCound='$user'";
		  $result = mysql_query($sql,$con);
	}
	else
	{
		 $t=time();
		 $distime=$t-$time;
		 $sql="UPDATE USER 
	      SET usertime ='$t'
          WHERE userCound='$user'";
		  mysql_query($sql,$con);
		// echo "时间差".$distime."</br>";
		 
		 $distime=intval(floor($distime/10));
		// echo "分钟".$distime."</br>";
		 if($distime>5)
		 {
			  $sql="UPDATE USER 
	                SET usertime =0
                    WHERE userCound='$user'";
		            mysql_query($sql,$con); 
		
		 }
		 else
		 {
		 $sql="SELECT userbalance 
		        FROM USER
                WHERE userCound='$user'";
		 $result = mysql_query($sql,$con);
         $row = mysql_fetch_array($result);
		// echo "账户余额".$row['userbalance']."</br>";
	     $charge = $row['userbalance']-$distime;
		// echo  "账户最终余额".$charge."</br>";
          $sql="UPDATE USER 
	      SET userbalance ='$charge'
          WHERE userCound='$user'";
		  $result = mysql_query($sql,$con);
		 }
	}
		  $sql="SELECT * 
		        FROM USER
                WHERE userCound='$user'";
		  $result = mysql_query($sql,$con);
		  $row= mysql_fetch_array($result);	
}
echo ($row['userbalance'] );
mysql_close($con);
?>