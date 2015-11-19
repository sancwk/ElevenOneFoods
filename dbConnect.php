<?php 
	$server = "localhost";
    $user = "root";
    $pwd = "";
    $db = "ElevenOneFoods";

    // Create connection
    $conn = new mysqli($server, $user, $pwd, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
 ?>