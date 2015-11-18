<!DOCTYPE html>
<html>
<head>
	<title>Welcome to ElevenOne Foods</title>
	<link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css" media="screen" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style-portfolio.css">
    <link rel="stylesheet" href="css/picto-foundry-food.css" />
    <link rel="stylesheet" href="css/jquery-ui.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="favicon-1.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/javascript" href="js/bootstrap.min.js">
    <link rel="stylesheet" type="text/javascript" href="">
</head>
<body background="images/landing_bg.jpg">
	
	<div id="header">
		<img src="images/logo.png" width="500px">
	</div>
	<div id="content">
		<div id="leftBlock">
			<div id="guestUser"><a href="main.php"><img src="images/expresslogin.png" width="200px"></a>
					<div class="mid"><strong>Enter As</strong><br>Guest</div>
			</div>
			<div id="user"><a href="#" onclick="login()"><img src="images/expresslogin.png" width="200px"></a>
					<div class="mid"><strong>Enter As</strong><br>Member</div>
			</div>		
		</div>

		
		

		<div id="reg" class="rightBlock">
			<h2 class="top-title" style="font-size:2.4em; color:#000; text-align:center;">Register with us</h2>
			<hr>
		</div>
		<div id="login" class="rightBlock" style="display:none">
			<h2 class="top-title" style="font-size:2.4em; color:#000; text-align:center;">Sign in</h2>
			<hr>
		</div>
	</div>

	<div id="footer">
	<div>
		<ul>
            <li><a class="icon-twitter color_animation" href="#" target="_blank"></a></li>
            <li><a class="icon-github color_animation" href="#" target="_blank"></a></li>
            <li><a class="icon-linkedin color_animation" href="#" target="_blank"></a></li>
        	<li><a class="icon-mail color_animation" href="#"></a></li>
        </ul>
	</div>
		<p>© 2015 ElevenOne Foods, (PVT)LTD. All rights reserved.</p>
	</div>
	
	<script type="text/javascript">
		function login(){
			document.getElementById('login').style.display = "block";
			document.getElementById('reg').style.display = "none";
		}
	</script>

</body>
</html>