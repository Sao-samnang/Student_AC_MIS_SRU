<?php
session_start();
include("action.php");
$db = new action();

$tbl = "tbl_useradmin";
$id = $_POST['id'];
$pass = $_POST['conpass'];
if (isset($_SESSION['email'])) {
    $email = htmlspecialchars($_SESSION['email']);
    $checkMail = $db->selectEmail($tbl, $email);
    if ($id == 3) {
        if ($checkMail == true) {
            $db->updatePass($tbl, $pass, $email);
            echo json_encode("success");
        }
    }
}
