<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>feedback table</title>

<link rel="stylesheet" type="text/css" href="feedbacktable.css">


</head>

<body>
<center>
<p class="head" > Feedback Details...  </p>
<?php

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
}else{
	echo "Successfully connected !!! <br><br><br> ";
}

if(isset($_POST['Update'])){
$Updatequery = "UPDATE feedback_table SET Satisfactory='$_POST[satisfactory]',Feedback_Title='$_POST[feedbacktitle]',In_Detail='$_POST[indetail]',Customer_Name='$_POST[customername]',Email='$_POST[email]',Contact_No='$_POST[contactno]',Order_Date='$_POST[orderdate]',Order_Time='$_POST[ordertime]' WHERE Email='$_POST[hidden]'";

mysqli_query($conn,$Updatequery);


}

if(isset($_POST['delete'])){
$Deletequery = "DELETE FROM feedback_table WHERE Email='$_POST[hidden]'";
mysqli_query($conn,$Deletequery);


}




//display feedback details in a table//

// Select all data , display them in a table//
$select = "SELECT * FROM feedback_table";
$result = mysqli_query($conn, $select);


if (mysqli_num_rows($result) > 0) {
	// print table heads//
	echo ("<table border=1 class=feedback_table>
		<tr>
			<th>Satisfactory</th>
			<th>Feedback Title</th>
			<th>In Detail</th>
			<th>Customer Name</th>
			<th>Email</th>
			<th>Contact No</th>
			<th>Order Date</th>
			<th>Order Time</th>
			
						
		</tr>");
		
    // output data from row by row
    while($row = mysqli_fetch_array($result)) {
    	echo "<form action=viewfeedbacktable.php method=post>";
		echo "<tr>";
		echo "<td>" . "<input type=text name=saticfactory value=" . $row["Satisfactory"] . " </td>";
		echo "<td>" . "<input type=text name=feedbacktitle value=" . $row["Feedback_Title"] . " </td>";
		echo "<td>" . "<input type=text name=indetail value=" . $row["In_Detail"] . " </td>";
		echo "<td>" . "<input type=text name=customername value=" . $row["Customer_Name"] . " </td>";
		echo "<td>" . "<input type=text name=email value=" . $row["Email"] . " </td>";
		echo "<td>" . "<input type=text name=contactno value=" . $row["Contact_No"] . " </td>";
		echo "<td>" . "<input type=text name=orderdate value=" . $row["Order_Date"] . " </td>";
		echo "<td>" . "<input type=text name=ordertime value=" . $row["Order_Time"] . " </td>";
		echo "<td>" . "<input type=hidden name=hidden value=" . $row["Email"] . " </td>";
		echo "<td>" . "<input type= submit name-Update value=Update " . " </td>";
		echo "<td>" . "<input type= submit name-delete value=delete " . " </td>";
		echo "</tr>";
		echo "</form>";
    }
echo ("</table>");
} 

else {
    echo "0 results";
}

mysqli_close($conn);
echo "<br><br><br><br><br><br>";

echo "<a href='feedbackhead.php'> Go Menu</p><br>";

?>


</center>
</body>
</html>
