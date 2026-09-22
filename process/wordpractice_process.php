<?php
require "../connection.php";
$index = $_POST["index"];
$marks = $_POST["marks"];

if ($index == "") {
    echo "Please enter the INDEX NUMBER";
} else {
    session_start();
    $admin = $_SESSION["admin"];
    date_default_timezone_set("Asia/Colombo");
    $date = date("Y/m/d");
    $time = date("h:i");
    $rs = Database::search("SELECT * FROM wordpractice WHERE student_id='" . $index . "' AND `date`='" . $date . "'");
    $rsn = $rs->num_rows;
    if ($rsn == 1) {
        echo "Already added";
    } else {
        Database::iud("INSERT INTO wordpractice(student_id,`date`,`time`,result,admin_id)VALUES('" . $index . "','" . $date . "','" . $time . "','" . $marks . "','" . $admin["id"] . "')");
    echo "success";
    }
}
