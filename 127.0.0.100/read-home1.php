	<?php
    $a=$_GET['BookName'];
	setcookie('mycookie',$a);	
	?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>阅读</title>

<link rel="shortcut icon" type="image/x-icon" href="C:\Users\Troy\Documents\在线数字图书馆\favicon.ico" media="screen" />
<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">

  <link rel="stylesheet" href="css/normalize.css">

    <link rel="stylesheet" href="css/style.css"  />
	<frameset  rows="9%,84%" border="0">
		<frame  name="top" noresize src="top2.htm" scrolling="no" >
    <frameset  cols="16%,*"  >
        <frame name="left" scrolling="no" noresize src="read-left.htm">
		<?php echo"<frame name='right' src='read.php?Chapter=".$_GET['Chapter']."'>" ?>
	</frameset> 
	</frameset>

	<noframes></noframes>
	<?php
	require( 'check.php' );
	?>
</head>
</html>
