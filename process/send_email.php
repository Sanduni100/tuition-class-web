<?php

use PHPMailer\PHPMailer\PHPMailer;
$adminid = $_POST["adminid"];

// session_start();
// echo $_SESSION["admin"]["id"];
// require "result.php";

require "../connection.php";
// $content = file_get_contents('result.php');
require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'buddhikaviraj990@gmail.com';
$mail->Password = 'vvkliqroetoycawe';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom('buddhikaviraj990@gmail.com', 'Royal Institute ');
$mail->addReplyTo('buddhikaviraj990@gmail.com', 'Royal Institute ');
$mail->addAddress('buddhikalms2002@gmail.com');
$mail->isHTML(true);
$mail->Subject = 'Result | Royal Institute';
// $bodyContent = file_get_contents("a.php");
$bodyContent = file_get_contents("a.php").'<a href="http://localhost/lasa/download.php?id='.$adminid.'" target="_blank" class="v-button" style="box-sizing: border-box;display: inline-block;font-family:arial,helvetica,sans-serif;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #FFFFFF; background-color: #3AAEE0; border-radius: 4px;-webkit-border-radius: 4px; -moz-border-radius: 4px; width:auto; max-width:100%; overflow-wrap: break-word; word-break: break-word; word-wrap:break-word; mso-border-alt: none;">Download Sheet</a>'.file_get_contents("b.php");

$mail->Body    = $bodyContent;

if (!$mail->send()) {
    echo 'Verification code sending failed';
?>
    <script>
        window.location = "../index6.php";
    </script>
<?php
} else {
    echo 'Success';
?>
    <script>
        window.location = "../index6.php";
    </script>
<?php
}
?>