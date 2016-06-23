    
	<?php 	
            session_start();
			// Include phpass 库
           require('PasswordHash.php');
          // 初始化散列器为不可移植(这样更安全)
           $hasher = new PasswordHash(8, false);
            $user = $_POST["uct"];  
            $psw = $_POST["pwd"];  
            $psw_confirm = $_POST["pwd1"];
            $code=$_POST['code'];
			//echo $_SESSION['rand'];
            $key1=strlen($user);
            $key2=strlen($psw);	
        	//用来检索前两位字符		
			//echo substr($user,0,2);
			if($code!=$_SESSION['rand'])
			{
				echo"<script>alert('验证码不正确！'); history.go(-1);</script>"; 
			}
            else if($user == "" || $psw == "" || $psw_confirm == "")  
            {  
                echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";  
            }
            else if($key1<5||$key1>9)	
			{
				echo"<script>alert('用户名长度不对!'); history.go(-1);</script>"; 
			}	
			 else if($key2<5||$key1>9)	
			{
				echo"<script>alert('密码长度不对!'); history.go(-1);</script>"; 
			}
            else if(!(preg_match("/^[0-9a-zA-Z]{4,21}$/",$user))){
               echo"<script>alert('用户名包含非法字符！'); history.go(-1);</script>"; 
            }
            else if(!(preg_match("/^[0-9a-zA-Z]{4,21}$/",$psw))){
               echo"<script>alert('密码包含非法字符！'); history.go(-1);</script>"; 
            }			
            else  
            {  
                if($psw == $psw_confirm)  
                {  
                   $con = mysql_connect("localhost","cat","123456");
                  if (!$con)
                     {
                      die('Could not connect: ' . mysql_error());
                     } 
                    mysql_select_db("my_db");  //选择数据库 
                   					
                    $sql = "select userCound from user where userCound = '$_POST[uct]'"; //SQL语句  
                    $result = mysql_query($sql,$con);    //执行SQL语句  
                    $num = mysql_num_rows($result); //统计执行结果影响的行数  
                    if($num)    //如果已经存在该用户  
                    {  
                        echo "<script>alert('用户名已存在'); history.go(-1);</script>";  
                    }  
                    else    //不存在当前注册用户名称  
                    {  
					    $hashedPassword = $hasher->HashPassword($_POST['pwd']);
						$check = $hasher->CheckPassword($_POST['pwd'], $hashedPassword);
						echo $hashedPassword;
                        print "Check correct: '" . $check . "' (should be '1')\n";
                        $sql_insert = "insert into user (userCound,userPasscode) values('$_POST[uct]','$hashedPassword')";  
                        $res_insert = mysql_query($sql_insert,$con);  
                        //$num_insert = mysql_num_rows($res_insert);  
                        if($res_insert)  
                        {  
                            echo "<script>alert('注册成功！');</script>";
							echo "<script>"."top.location='test.php'; "."</script>";
           						
                        }  
                        else  
                        {  
					   //     die('Error: ' . mysql_error());
                            echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";  
                        }  
                    }  
                }  
                else  
                {  
                    echo "<script>alert('密码不一致！'); history.go(-1);</script>";  
                }  
            } 

    ?>  