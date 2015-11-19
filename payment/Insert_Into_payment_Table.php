<?php
error_reporting (E_ALL ^ E_NOTICE)
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Insert into Payment Table</title>

</head>

<body>

<?php

$fname= $_POST["fname"]; 
$lname= $_POST["lname"];               
$nic= $_POST["nic"];                       
$fitem= $_POST["fitem"];                
$quantity= $_POST["quantity"]; 
$amount=$_POST["amount"];
$pay = $_POST["pitem"];
$cno=$_POST["card"];     


                   


//connect and insert data to the db using mysqli//
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "payment";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed:<br> " . mysqli_connect_error());
}
else {
	//echo ("successfully connected<br>");
}

// Insert data into order_table//
$sql = "INSERT INTO pay (First_Name,Last_Name,NIC,Select_Food,Quantity,Amount,Payment_Method,Card_No) VALUES ('$fname','$lname','$nic', '$fitem', '$quantity', '$amount', '$pay', '$cno')";

if (mysqli_query($conn, $sql)) {
    //echo "New record created successfully<br>";
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
/*beginning of paragraph*/


echo "<p class='message_after_adding_reservation'>Your Payment has been Made<br><br><br>	
		<a href='payform.php'>Go Back</a></p>";
		
/*end of paragraph*/

?>

</body>
</html>
