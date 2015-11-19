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
$satisfy=$_POST["sat"];
$title= $_POST["fktitle"];
$detail= $_POST["in_detail"];
$name= $_POST["Cname"];                                       
$email=$_POST["email"];
$mobile_no=$_POST["cno"];     
$O_date= $_POST["O_date"];                   
$O_time= $_POST["O_time"];

                   


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
	echo ("successfully connected<br>");
}

// Insert data into feedback_table//
$sql = "INSERT INTO feedback_table (Satisfactory, Feedback_Title, In_Detail, Customer_Name, Email, Contact_No, Order_Date, Order_Time) VALUES ('$satisfy','$title','$detail','$name','$email','$mobile_no','$O_date','$O_time')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully<br>";
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
/*beginning of paragraph*/


echo "<p class='message_after_adding_feedbacks'>Your Feedback has been made. Thank you for dealing with us.<br><br><br>	
		<a href='feedbackhead.php'>Go Back</a>   
		<a href='viewfeedbacktable.php'> View Detail</a></p>";
		
/*end of paragraph*/

?>

</body>
</html>
