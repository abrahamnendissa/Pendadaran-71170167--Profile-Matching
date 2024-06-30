<?php
 
$default_url = '../data/tmp/tmp 20';
$tema = '20-colored_admin_panel-web_Free20-04-2017_596693991';
$url = $default_url.'/'.$tema;
?>

<!DOCTYPE html>
<html lang="en">
<?php include '../include/function/login.php';?>    
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="<?php echo $url;?>/css/bootstrap.css">
<link href="<?php echo $url;?>/css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo $url;?>/css/font.css" type="text/css"/>
<link href="<?php echo $url;?>/css/font-awesome.css" rel="stylesheet"> 

</head>
<body class="signup-body">
		<div class="agile-signup">	
			
			<div class="content2">
				<div class="grids-heading gallery-heading signup-heading">
					<h2>Login</h2>
				</div>
				<form action="" method="post">
					<input type="text" name="username" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}">
					<input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
					<input type="submit" name="login" class="register" value="Login">
				</form>
				
				
				
				<a href="../../">Back To Home</a>
			</div>
			<br>
			<br>
			<!-- footer -->
			<div class="copyright">
				<p><?php echo $copyright;?></p>
			</div>
			<!-- //footer -->
			
		</div>
	
</body>
</html>

 
 