<?php
include("action.php");
$db=new action();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_sru_student";
$conn = new mysqli($servername, $username, $password, $dbname);
// 
$id=$_POST['id'];
$lname=$_POST['lname'];
$fname=$_POST['fname'];
$dob=$_POST['birthdate'];
// Convert to Unix timestamp
$timestamp = strtotime($dob);

// New date format (e.g., "d-m-Y" for day-month-year)
$newFormat = "y-m-d"; 

// Format the date using date() function
$formattedDate = date($newFormat, $timestamp);

$email=$_POST['email'];
$pfimg=$_FILES['pfimg']['name'];
$major=$_POST['major'];
$phone=$_POST['phone'];
$add=$_POST['address'];
$pass=$_POST['conpass'];
$gender=$_GET['gender'];
$permission=$_POST['permission'];
// $txtid=substr($id,-3);
// // echo $txtid+"";
// // Create connection
$check=false;
$allemail=$db->selectEmail("tbl_useradmin");
// 
$characters = 'adsf012345678910';
$randomText = substr(str_shuffle($characters), 0, 6); // Generate a random string of 10 characters
// echo $randomText;

// Create connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// foreach($allemail as $txtmail){
//   if($email==$txtmail){
//     $check=false;
//   }else{
//     $check=true;
//   }
// }
// if($check==true){
  if($lname!="" && $fname!="" && $email!="" && $permission!="" && $pass!=""){
    $tempname = $_FILES['pfimg']['name'];;
    $folder = "../Image/" . $pfimg;
    move_uploaded_file($tempname, $folder);
    $insert="'".$randomText."','".$fname."','".$lname."','".$gender."','".$formattedDate."','".$email."','".$pfimg."','".$permission."','".$major."','".$phone."','".$add."','".$pass."'";
    $db->InsertData("tbl_useradmin",$insert);
    echo json_encode("login success...!");
  }
  // }else{
  //   echo json_encode(value: "failure");
  // }
?>