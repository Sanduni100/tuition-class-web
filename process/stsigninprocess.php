<?php
require "../connection.php";

$user2 = $_POST["user2"];
$index2 = $_POST["index2"];

if ($user2 == "") {
    echo "Please enter user id";
} else if ($index2 == "") {
    echo "Please enter user index or password";
} else {
    $rs = Database::search("SELECT * FROM `student` WHERE `email`='" . $user2 . "' AND `index` ='" . $index2 . "' AND `status`='1'");
    $n =  $rs->num_rows;
    if ($n == 1) {
        $row = $rs->fetch_assoc();

        echo "success";
        session_start();
        $_SESSION["student"]=$row;
    } else {
        echo "Error login";
    }
}