<?php session_start();?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

if(isset($_POST["InputName1"])){
	$fname=$_POST["InputName1"];
	$lname=$_POST["InputName2"];
	
	$con = mysqli_connect("localhost","root","","pizza");
	$query=mysqli_query($con,"SELECT * FROM customer WHERE fname = '$fname' AND lname = '$lname'");
		while($row = mysqli_fetch_assoc($query)) {
			echo "id: " . $row["c_id"]. "<br>Name: " . $row["fname"]. " " . $row["lname"]. "<br>Telephone: " . $row["tel"]. " <br>Email: " . $row["email"]. "<br>";
			}
		
}
?>


</body>
</html>