<?php  
            $BookName = $_POST["BM"];  
            $BookID = $_POST["BID"];  
		    echo $BookName;
			echo $BookID;
            if($BookName == "" || $BookID == "")  
            {  
                echo "<script>alert('��ȷ����Ϣ�����ԣ�'); history.go(-1);</script>";  
            }  
            else  
            {  
                   $con = mysql_connect("localhost","root","123456");
                   if (!$con)
                     {
                      die('Could not connect: ' . mysql_error());
                     } 
                    mysql_select_db("my_db"); 
                   					
                    $sql = "select BookID from Books where BookName = '$_POST[BM]'";
					$sql2 = "select BookID from Books where BookID = '$_POST[BID]'";
                    $result = mysql_query($sql,$con);
                    $result2 = mysql_query($sql2,$con);					
                    $num = mysql_num_rows($result);
					$num2 = mysql_num_rows($result2);
                    if($num||$num2)
                    {  
                        echo "<script>alert('�鼮���鼮���Ѵ��ڣ�'); history.go(-1);</script>";  
                    }  
                    else    
                    {  
                        $sql_insert = "insert into Books (BookName,BookID) values('$_POST[BM]','$_POST[BID]')";  
                        $res_insert = mysql_query($sql_insert,$con);  
                        if($res_insert)  
                        {  
                            echo "<script>alert('��ӳɹ���');history.go(-1);</script>";          						
                        }  
                        else  
                        {  
                            echo "<script>alert('ϵͳ��æ�����Ժ�'); history.go(-1);</script>";  
                        }  
                    }  
                
            } 
    ?>  