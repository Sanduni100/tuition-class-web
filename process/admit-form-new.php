<?php
// echo "success";
require "../connection.php";

$name1 = $_POST["name1"];
$fname = $_POST["fname"];
$mname = $_POST["mname"];
$fjob = $_POST["fjob"];
$email = $_POST["email"];
$gender = $_POST["gender"];
$dob = $_POST["dob"];
$rel = $_POST["rel"];
$class1 = $_POST["clz"];
$section = $_POST["section"];
$contact = $_POST["contact"];
$address = $_POST["address"];
$ind = $_POST["index"];

$rs = Database::search("SELECT * FROM student WHERE email = '".$email."'");
$n = $rs->num_rows;

if($n>0){
echo "User already registerd with this email";
}else if($name1==""){
        echo  "Please enter your name ";
}else if($fname == ""){
        echo "Please enter Father Name";
        }else if($mname==""){
echo "Please enter Mother Name";
        }else if($fjob==""){
echo "Please enter the father job";
        }else if($email==""){
echo "Please enter the email";
        }else if($gender==""){
echo "Please enter the gender";
        }else if($dob==""){
echo "Please enter the birth day";
        }else if($section==""){
echo "Please enter the section";
        }else if($contact==""){
echo "Please enter the contact number";
        }else if($address==""){
echo "Please enter the address";
        }else if($index==""){
echo "Please enter the index number";
        }else {
                $d = new DateTime();
                $tz = new DateTimeZone("Asia/Colombo");
                $d->setTimezone($tz);
                $date = $d->format("Y-m-d H:i:s");
        
        Database::iud("INSERT INTO student(`name`,fname,mname,fjob,admissiondate,email,dob,contact,adress,class,rel,section,gender,`know`)
        VALUES('" . $name1 . "','" . $fname . "','" . $mname . "','" . $fjob . "','".$date."','" . $email . "','" . $dob . "','" . $contact . "','" . $address . "',',".$class1."',',".$rel."',',".$section."',',".$gender."','".$ind."');");
        echo "success";
        }
// echo $name1;
// echo $fname;
// echo $mname;
// echo $fjob;
// echo $email;
// echo $gender;
// echo $dob;
// echo $rel;
// echo $class;
// echo $section;
// echo $contact;
// echo $address;


// require "../SMTP.php";
// require "../PHPMailer.php";
// require "../Exception.php";

// use PHPMailer\PHPMailer\PHPMailer;

// $rs = Database::search("SELECT * FROM `student` WHERE `email`='" . $email . "'");
// $n = $rs->num_rows;



// $code = uniqid();

// // Database::iud("UPDATE `user` SET `verification_code`='".$code."' WHERE 
// // `email`='".$email."'");

// $mail = new PHPMailer;
// $msg = file_get_contents("mail.php");
// $mail->IsSMTP();
// $mail->Host = 'smtp.gmail.com';
// $mail->SMTPAuth = true;
// $mail->Username = 'diligentsoftwaresolution@gmail.com';
// $mail->Password = 'ihhrkydcpkkdpnib';
// $mail->SMTPSecure = 'ssl';
// $mail->Port = 465;
// $mail->setFrom('diligentsoftwaresolution@gmail.com', 'Registration');
// $mail->addReplyTo('diligentsoftwaresolution@gmail.com', 'Registration');
// $mail->addAddress($email);
// $mail->isHTML(true);
// $mail->Subject = 'Registration Success';
// $bodyContent = $msg;
// $mail->Body    = $bodyContent;

// if (!$mail->send()) {
//     echo 'Registration Faild';
// } else {
//     echo 'Success';
// }
