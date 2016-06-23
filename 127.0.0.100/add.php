    <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
    <html>  
    <head>  
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312">  
    <title>进行书籍管理</title> 
    <style>
    .error {color: #FF0000; font-size: 15px;}
    </style>	
	<head>
    </head>
    </head>  
    <body>  
    <h1 align="center">书籍添加系统</h1>
    <form method="post" action="add2.php">  	
	<table align="center">
    <tr>
    <td>书籍名称：</td>
    <td colspan="2"><input type="text" name="BM"></td>
	<td><span class="error">书籍名称</span></td>
    </tr>
    <tr>
    <td>书籍号:</td>
    <td colspan="2"><input type="text" name="BID"></td>
	<td><span class="error">书籍号6位数字</span></td>
    </tr>
	<tr>
	<td>&nbsp;</td>
    <td><input type="Submit" value="添加"> </td>
    <td><input type="reset" value="清除"> </td>
    </tr>
    </table>           
    </form>
	<p align="center"><a href="overview.php">返回首页</a></p>
    </body> 
<script>
function changing(){
    document.getElementById('sry').src="1.php?"+Math.random();
} 
</script>	
    </html>  