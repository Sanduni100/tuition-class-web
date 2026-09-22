<?php
require "../connection.php";
date_default_timezone_set("Asia/Colombo");

$rs = Database::search("SELECT * FROM wordpractice INNER JOIN admin ON wordpractice.admin_id=admin.id WHERE `date`='" . date("Y/m/d") . "' AND admin.usercode='" . $_GET['id'] . "'");
$rsn = $rs->num_rows;
?>
<h1><strong>ROYAL ENGLISH INSTITUTE</strong></h1>
<p>Date : <?php echo date("Y/M/d"); ?></p>
<p>Time : <?php echo date("h:m:s"); ?></p>
<p>Instuctore : <?php echo $_GET['id'] ?></p>
<p>Total Attendance : <?php echo $rsn; ?></p>
<table style="border-collapse: collapse; width: 100%; height: 36px;" border="1">
    <tbody>
        <tr style="height: 18px;">
            <td style="width: 25%; text-align: center; height: 18px;"><strong>Time</strong></td>
            <td style="width: 25%; text-align: center; height: 18px;"><strong>Time</strong></td>
            <td style="width: 25%; text-align: center; height: 18px;"><strong>Student Index</strong></td>
            <td style="width: 25%; text-align: center; height: 18px;"><strong>Result</strong></td>
        </tr>
        <?php
        for ($i = 0; $i < $rsn; $i++) {
            $row = $rs->fetch_assoc();
        ?>
            <tr style="height: 18px;">
                <td style="width: 25%; height: 18px; text-align: center;"><?php echo $row["id"] ?></td>
                <td style="width: 25%; height: 18px; text-align: center;"><?php echo $row["time"] ?></td>
                <td style="width: 25%; height: 18px; text-align: center;"><?php echo $row["student_id"] ?></td>
                <td style="width: 25%; height: 18px; text-align: center;"><?php echo $row["result"] ?></td>
            </tr><?php
                }
                    ?>

    </tbody>
</table>