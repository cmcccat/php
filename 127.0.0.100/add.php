    <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
    <html>  
    <head>  
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312">  
    <title>�����鼮����</title> 
    <style>
    .error {color: #FF0000; font-size: 15px;}
    </style>	
	<head>
    </head>
    </head>  
    <body>  
    <h1 align="center">�鼮���ϵͳ</h1>
    <form method="post" action="add2.php">  	
	<table align="center">
    <tr>
    <td>�鼮���ƣ�</td>
    <td colspan="2"><input type="text" name="BM"></td>
	<td><span class="error">�鼮����</span></td>
    </tr>
    <tr>
    <td>�鼮��:</td>
    <td colspan="2"><input type="text" name="BID"></td>
	<td><span class="error">�鼮��6λ����</span></td>
    </tr>
	<tr>
	<td>&nbsp;</td>
    <td><input type="Submit" value="���"> </td>
    <td><input type="reset" value="���"> </td>
    </tr>
    </table>           
    </form>
	<p align="center"><a href="overview.php">������ҳ</a></p>
    </body> 
<script>
function changing(){
    document.getElementById('sry').src="1.php?"+Math.random();
} 
</script>	
    </html>  