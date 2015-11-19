<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Order table</title>

<link rel="stylesheet" type="text/css" href="ordert.css">


</head>

<body>
<p class="font" >Order Table...  </p>
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
}
else {
	//echo ("successfully connected<br>");
}
if(isset($_POST['delete'])) {
	$id = $_POST['oid'];
	
	$sql = "DELETE FROM order_table WHERE id =".$id."";
    $conn->query($sql);
}
//display reservations details in a table//

// Select all data , display them in a table//
$select = "SELECT * FROM order_table";
$result = mysqli_query($conn, $select);


	echo ("<table border=1 class=order_table>
		<tr>
			<th>Honorfic</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>NIC No</th>
			<th>Food Item</th>
			<th>Quantity</th>
			<th>Email</th>
			<th>Contact No</th>
			<th>Address</th>
			<th>Required_Date </th>
			<th>Required Time</th>
			<th>Cancel</th>
						
		</tr>");
	if (mysqli_num_rows($result) > 0) {	
    // output data from row by row
    while($row = mysqli_fetch_assoc($result)) {
        //echo "Name: " . $row["name"]. " " . "Age: " . $row["age"]. "<br>";
		echo (
		"<tr>
			<form method=\"post\" action=\"\">
			<td>" . $row["Honorfic"] . "</td>
			<td>" . $row["First_Name"] . "</td>
			<td>" . $row["Last_Name"] . "</td>
			<td>" . $row["NIC_No"] . "</td>
			<td>" . $row["Food_Item"] . "</td>
			<td>" . $row["Quantity"] . "</td>
			<td>" . $row["Email"] . "</td>
			<td>" . $row["Contact_No"] . "</td>
			<td>" . $row["Address"] . "</td>
			<td>" . $row["Required_Date"] . "</td>
			<td>" . $row["Required_Time"] . "</td>
			<td>
							
							<input name=\"oid\" type=\"hidden\" id=\"oid\" value=\"".$row["id"]."\"\>
							<input class=\"delete1\" name=\"delete\" type=\"submit\" id=\"delete\" value=\"Delete\">
						</td>
					</form>
			
		</tr>");
    }
echo ("</table>");
} 

else {
    /*echo "0 results";*/
}

mysqli_close($conn);

?>



</body>
</html>
