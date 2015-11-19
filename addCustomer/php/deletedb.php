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
	$fname=$_POST["InputName1"];
	$lname=$_POST["InputName2"];
	
	$db = new Database("localhost", "root", "", "pizza");
	$x = $db->delete("DELETE FROM customer WHERE fname = '$fname' AND lname = '$lname'");
	$db->dbclose();
	
	header("Location:../delete.php");
	
}
?>


</body>
</html>