<?php session_start();?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
require 'db.php';

if(isset($_POST["InputName1"])){
	$fname1=$_POST["InputName"];
	$lname2=$_POST["InputName0"];
	$fname=$_POST["InputName1"];
	$lname=$_POST["InputName2"];
	$tel=$_POST["InputTel"];
	$email=$_POST["InputEmail"];
	$email2=$_POST["InputEmail2"];
	$password=$_POST["InputPassword1"];
	
	if($email!=$email2){
		?>
		<script>
			document.getElementById("InputEmail2").style.borderColor = "red";
		</script>
    <?php
	header("Location:../index.php");
	}
	
	$hpassword = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
	
	$db = new Database("localhost", "root", "", "pizza");
	$x = $db->insert("UPDATE customer
SET fname='$fname', lname='$lname', tel='$tel', email='$email', password='$hpassword' WHERE fname = '$fname1' AND lname = '$lname2'");
	$db->dbclose();
	
	header("Location:../update.php");
	
}
?>


</body>
</html>