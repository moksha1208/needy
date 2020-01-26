<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "ngo";

// Create connection
 $conn = mysqli_connect($host_name,$mysql_username,$mysql_password,$db_name);($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
