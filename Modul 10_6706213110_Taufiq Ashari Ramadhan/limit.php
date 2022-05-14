<!DOCTYPE HTML>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "myDB2";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Orders LIMIT 30";

mysqli_close($conn);
?>

</body>
</html>