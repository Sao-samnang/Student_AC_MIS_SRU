<?php
// header('Content-Type: application/json; charset=utf-8');
include("action.php");
$db = new action();
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "db_sru_student";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// 
$tbl = "tbl_useradmin";
// 
// $id = $_POST['id'];
$lname = $_POST['lname'];
$fname = $_POST['fname'];
$dob = $_POST['birthdate'];
// echo json_encode($id);
// Convert to Unix timestamp
$dobnewFormat = date('y/m/d', strtotime($dob));

// New date format (e.g., "d-m-Y" for day-month-year)

$email = $_POST['email'];
$pfimg = $_FILES['pfimg']['name'];
$major = $_POST['major'];
$phone = $_POST['phone'];
$add = $_POST['address'];
$pass = $_POST['conpass'];
$gender = $_POST['gender'];
$permission = $_POST['permission'];
// id
$txtid = "";
$getid = $db->lastId($tbl); // Retrieve the last ID from the database
$prefix="";
// Determine the prefix based on permission
if ($permission == "teacher") {
    $prefix = "ACT";
} elseif ($permission == "president") {
    $prefix = "ACSA";
} else {
    $prefix = "ACS";
}

// Generate the new ID
if ($getid == null) {
    $txtid = $prefix . "0000001";
} else {
    // Extract the numeric part of the ID
    $idfind1 = substr($getid, -7);
    $idfind2 = (int)$idfind1 + 1;

    // Ensure the numeric part is padded to 7 digits
    $newNumber = str_pad($idfind2, 7, "0", STR_PAD_LEFT);
    $txtid = $prefix . $newNumber;
}
// check email
$allemail = $db->selectEmail("tbl_useradmin");
$emailExists = false;

if (!empty($email)) {
  // Loop through all emails to check if the input matches any
  foreach ($allemail as $txtemail) {
    if ($txtemail['email'] == $email) {
      $emailExists = true;
      break;
    }
  }
}
// 
// $characters = 'adsfc012345678910';
// $randomText = substr(str_shuffle($characters), 0, 3); // Generate a random string of 10 characters
// echo $randomText;

// 
$value = "'" . $txtid . "', '" . $fname . "', '" . $lname . "', '" . $gender . "', '" . $dobnewFormat . "', '" . $email . "', '" . $pfimg . "','" . $permission . "','" . $major . "', '" . $phone . "', '" . $add . "', '" . $pass . "'";
if ($txtid != "" && $lname != "" && $fname != "" && $gender != "" && $email != "" && $phone != "") {
  if ($emailExists == false) {
    $db->InsertData($tbl, $value);
    $tempname = $_FILES['pfimg']['name'];;
    $folder = "../Image/" . $pfimg;
    move_uploaded_file($tempname, $folder);
    echo json_encode( "success");
  } else {
    echo json_encode("email");
  }
}


?>