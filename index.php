<?php  
   session_start();//session starts here  
   ob_start();
?>  


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
			<div id="guestUser"><a href="main.php" title="Go as guest!"><img src="images/expresslogin.png" width="200px"></a>
					<div class="mid"><strong>Enter As</strong><br>Guest</div>
			</div>
			<div id="user"><img src="images/expresslogin.png" width="200px" onclick="login()" title="Go, Login!" style="cursor: pointer;">
					<div class="mid"><strong>Enter As</strong><br>Member</div>
			</div>		
		</div>

		<div id="reg" class="rightBlock">
			<h2 class="top-title" style="font-size:2.4em; color:#000; text-align:center;">Register with us</h2>
			<hr>
			<form class="box" style="margin-top:-10%; background: none; border:none; box-shadow:none;">
				<fieldset class="boxBody" style="background: none; border:none; margin:0 -10px; box-shadow:none;">
				  <br>
				  <input type="text" tabindex="1" placeholder="Enter NIC number" required>
				  <br>
				  <input type="text" tabindex="2" placeholder="Pick an username" required>
				</fieldset>
				<footer style="margin-top:-10px;">
				  <input type="submit" class="text-center form-btn form-btn" value="Next" style="width: 100px; float: right;" tabindex="4">
				</footer>
			</form>
		</div>
		<div id="login" class="ulogin" style="display:none">
			<!-- <h2 class="top-title" style="font-size:2.4em; color:#000; text-align:center;">Sign in</h2>
			<hr> -->

				<div style="z-index:10; width:332px; height:300px; margin: 0 auto; margin-top:13%;">
					<form class="box login" method="post">
					<fieldset class="boxBody">
						<h2 style="float:left; display:inline;">Member Login</h2>
						<span title="Click to Dismiss!" style="display: inline; float:right; cursor: pointer;" onclick="dismiss()">| Back</span>
						<hr>	
					  <label>Username</label>
					  <input type="text" name="username" tabindex="1" placeholder="" required>
					  <label><a href="#" class="rLink" tabindex="5">Forget your password?</a>Password</label>
					  <input type="password" name="password" tabindex="2" required>
					</fieldset>
					<footer>
					  <label><input type="checkbox" tabindex="3">Keep me logged in</label>
					  <input type="submit" class="text-center form-btn form-btn" name="login" value="Login" style="width: 100px; float: right;" tabindex="4">
					</footer>
					</form>
				</div>
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
			document.getElementById('login').style.background = "images/landing_bg.jpg";
		}

		function dismiss(){
  			document.getElementById('login').style.display = "none";
				}	
	</script>

</body>
</html>

<?php  
      
    include("dbConnect.php");  
      
    if(isset($_POST['login']))  
    {  
        $username=$_POST['username'];  
        $pass=md5($_POST['password']);  
      
        $check_user = "select * from user WHERE username ='$username'AND passwd ='$pass'";  
      
        $run = mysqli_query($conn,$check_user);  
      
        if(mysqli_num_rows($run))  
        {  
            $_SESSION['username']=$username;
            header('Location: main.php');
      
        }  
        else  
        {  
          echo "<script>alert('wrong!')</script>";  
        }  
    }

    $conn->close();  
?>  