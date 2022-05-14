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

$sql = "INSERT INTO MyGuests (id,firstname, lastname, email,reg_date)
VALUES ('1','John', 'Doe', 'john@example.com','2014-10-22 14:26:15')";
$sql = "INSERT INTO MyGuests (id,firstname, lastname, email,reg_date)
VALUES ('2','Mary', 'Moe', 'mary@example.com','2014-10-23 10:22:30')";
$sql = "INSERT INTO MyGuests (id,firstname, lastname, email,reg_date)
VALUES ('3','Julie', 'Dooley', 'julie@example.com','2014-10-26 10:48:23')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>