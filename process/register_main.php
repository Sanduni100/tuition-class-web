<?php

require "connection.php";

require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

if(isset($_GET["e"])){

    $email = $_GET["e"];

    $rs = Database::search("SELECT * FROM `student` WHERE `email`='".$email."'");
    $n = $rs->num_rows;

    if(!$n >= 1){

        $code = uniqid();

        // Database::iud("UPDATE `user` SET `verification_code`='".$code."' WHERE 
        // `email`='".$email."'");

        $mail = new PHPMailer;
        $msg = file_get_contents("mail.php");
            $mail->IsSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'diligentsoftwaresolution@gmail.com';
            $mail->Password = 'ihhrkydcpkkdpnib';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->setFrom('diligentsoftwaresolution@gmail.com', 'Registration');
            $mail->addReplyTo('diligentsoftwaresolution@gmail.com', 'Registration');
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = 'Registration Success';
            $bodyContent = $msg;
            $mail->Body    = $bodyContent;

            if (!$mail->send()) {
                echo 'Registration Faild';
            } else {
                echo 'Success';
            }

    }else{
        echo ("Registration Failed");
    }

}

?>