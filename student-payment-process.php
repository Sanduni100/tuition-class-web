<?php
require "connection.php";
$index = $_GET["index"];
$email = $_GET["email"];

Database::iud("UPDATE student SET `status`='1' WHERE student.`index`='".$index."'  AND email ='".$email."'");

?><script>
    window.location="student-payment.php";
</script>
