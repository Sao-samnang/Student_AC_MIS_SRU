<?php
include("action.php");
$db = new action();
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

$email = $_POST["email"];
$password = $_POST["password"];
// if (isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
//   $email = $_COOKIE['email'];
//   $password = $_COOKIE['password']; // This should be a hashed value
// } else {
//   // Get data from the POST request
//   $email = $_POST["email"] ?? '';
//   $password = $_POST["password"] ?? '';
// }
// Retrieve user data from the database (example)
$sql = "SELECT * FROM tbl_useradmin WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
  // setcookie('email', $email, time() + (86400 * 30), "/"); // 30 days
  // setcookie('password', $password, time() + (86400 * 30), "/"); // Store hashed password
  echo json_encode("success");
} else {
  echo "fail";
}

$conn->close();
