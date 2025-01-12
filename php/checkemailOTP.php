<?php
session_start();
include("action.php");
$db = new action();
include('smtp/PHPMailerAutoload.php');

// Generate a 6-digit OTP
$otp = rand(100000, 999999);
$tbl = "tbl_useradmin";
$tblotp = "tbl_otp";
$id = $_POST['id'];
// 
$body = '<!DOCTYPE html>
<html>
<head>
<title>SMIS Info.</title>
</head>
<body>
  <div style="font-family: Helvetica,Arial,sans-serif;min-width:100%;overflow:auto;line-height:2">
    <div style="margin:50px auto;width:70%;padding:20px 0">
    <div style="border-bottom:1px solid #eee">
    <a href="" style="font-size:1.4em;color: #00466a;text-decoration:none;font-weight:600">SMIS Info.</a>
    </div>
    <p style="font-size:1.1em">Hey User.</p>
    <p>Thank you for choosing our system. Use the following OTP to complete the procedures to change your password. OTP is valid for 5 minutes. Do not share thiscode with others, including SMIS Info. employee.</p>
    <div style="display: flex;justify-self: center; width: 100%;">
        <h2 style="text-align: center;background:rgb(240, 241, 242); width: 100% ;padding: 30px 0px 30px 0px;color: #00466a ; letter-spacing: 20px;border-radius: 4px;">' . $otp . '</h2>
    </div>
    <p style="font-size:0.9em;">Regards,<br />SMIS Info.</p>
    <hr style="border:none;border-top:1px solid #eee" />
    <div style="float:right;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300">
        <p>SMIS Info.</p>
        <p>Cambodia,Svay Rieng.</p>
        <p>SRU</p>
    </div>
    </div>
    </div>
    </body>
    </html>';
// 
function smtp_mailer($to, $subject, $msg)
{
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    //$mail->SMTPDebug = 2; 
    $mail->Username = "saosamnang022@gmail.com";
    $mail->Password = "xodybbbkhrdkfxtw";
    $mail->SetFrom("saosamnang022@gmail.com", "SMIS Info.");
    $mail->Subject = $subject;
    $mail->Body = $msg;
    $mail->AddAddress($to);
    $mail->SMTPOptions = array('ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => false
    ));
    if (!$mail->Send()) {
        echo $mail->ErrorInfo;
    } else {
        return 'Sent';
    }
}
// otp confirm
if (isset($_SESSION['email'])) {
    $email = htmlspecialchars($_SESSION['email']);
    $emailExists = $db->selectEmail($tbl, $email);
    // 
    if ($id == 1) {
        $txtotp = $_POST['codeotp'];
        $txtmail = $db->selectOtp($tblotp, $txtotp, $email);
        if ($txtmail == $email) {
            $db->emailOtpdelete($tblotp, $txtmail);
            $_SESSION['email'] = htmlspecialchars($_SESSION['email']); // Store the input value in a session // Store the input value in a session
            echo json_encode(['status' => 'success', 'redirect' => 'changepass.php']);
            exit();
        }
    }
    // otp resend
    if ($id == 2) {
        if ($emailExists == true) {
            smtp_mailer($email, 'OTP Code Verification', $body);
            $db->InsertData("tbl_otp", "'" . $email . "','" . $otp . "'");
            echo json_encode("success");
        }
    }
}
