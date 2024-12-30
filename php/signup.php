<?php
include("action.php");
$db=new action();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_sru_student";
$id=$_POST['id'];
$lname=$_POST['lname'];
$fname=$_POST['fname'];
$dob=$_POST['birthdate'];
$email=$_POST['email'];
$pfimg=$_FILES['pfimg']['name'];
$major=$_POST['major'];
$phone=$_POST['phone'];
$add=$_POST['address'];
$pass=$_POST['conpass'];
$gender=$_GET['gender'];
$permission=$_POST['permission'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Create connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$tempname = $_FILES['pfimg']['name'];;
    $folder = "../Image/" . $pfimg;
    move_uploaded_file($tempname, $folder);
    $insert