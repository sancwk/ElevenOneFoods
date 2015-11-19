<?php
error_reporting (E_ALL ^ E_NOTICE)
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Insert into Order Table</title>

</head>

<body>

<?php
$hon=$_POST["hon"];
$fname= $_POST["fname"]; 
$lname= $_POST["lname"];               
$nic= $_POST["nic"];                       
$fitem= $_POST["fitem"];                
$quantity= $_POST["quantity"]; 
$email=$_POST["email"];
$adr = $_POST["adr"];
$cno=$_POST["cno"];     
$r_date= $_POST["r_date"];                   
$r_time= $_POST["r_time"];

                   


//connect and insert data to the db using mysqli//
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "elevenonefoods";

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
$sql = "INSERT INTO order_table (Honorfic, First_Name, Last_Name, NIC_No, Food_Item, Quantity, Email, Contact_No, Address, Required_Date, Required_Time) VALUES ('$hon','$fname','$lname','$nic', '$fitem', '$quantity', '$email', '$cno', '$adr','$r_date', '$r_time')";

if (mysqli_query($conn, $sql)) {
    //echo "New record created successfully<br>";
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
/*beginning of paragraph*/


echo "<p class='message_after_adding_reservation'>Your Order has been made. Please procced to payments.<br><br><br>	
		<a href='orderform.php'>Go Back</a></p>";
		
/*end of paragraph*/

?>

</body>
</html>
