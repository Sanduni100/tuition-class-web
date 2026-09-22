<?php
require "../connection.php";
$aduser = $_POST["aduser"];
$pw = $_POST["pw"];

if ($aduser == "") {
    echo "Please enter admin user name";
} else if ($pw == "") {
    echo "Please enter admin password";
}  else {
    $rs = Database::search("SELECT * FROM `admin` WHERE usercode = '".$aduser."' AND `password`='".$pw."'");
    $rsn = $rs->num_rows;
    if($rsn==1){
        $row = $rs->fetch_assoc();

        echo "success";
        session_start();
        $_SESSION["admin"] = $row;

        
    }else{
        echo "Invalid Login";
    }
    
}
