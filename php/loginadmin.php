<?php
include("action.php");
$db=new action();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_sru_student";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Create connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get data from the POST request
$email = $_POST["email"];
$password = $_POST["password"];

// Sanitize user input (important for security)
$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

// Retrieve user data from the database (example)
$sql = "SELECT * FROM tbl_useradmin WHERE email='$email' AND password='$password'"; 
$result = $conn->query($sql);

if ($result->num_rows ==1 ) {
  echo json_encode("success");
} else {
    echo "fail";
}

$conn->close();

?>