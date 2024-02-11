<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครเรียน ณ มหาลัยแห่งหนึ่ง</title>
</head>
<body>
<?php
    $name = $_GET['Name'];
    $gender = $_GET['gender1'];
    $Nationality = $_GET['Nationality'];
    $Birthday = $_GET['Birthday'];
    $Personal = $_GET['Personal'];
    $Home = $_GET['Home'];
    $Phon = $_GET['Phon'];
    $GPA = $_GET['GPA'];
    $email = $_GET['email'];
    $A = $_GET['A'];
    $Birthdate = new DateTime($Birthday);
    $currentDate = new DateTime();
    $age = $currentDate->diff($Birthdate)->y;
    echo "<table align='center' width='20%' border='1'>";
    echo "<tr><td colspan='2' align='center'><b>สมัครเรียน ณ มหาลัยแห่งหนึ่ง</b></td></tr>";
    echo "<tr><td>ชื่อ-นามสกุล : </td><td align='center'> <i> $name </i></td></tr>";
    echo "<tr><td>เพศ : </td><td align='center'> <i> $gender </i></td></tr>";
    echo "<tr><td>เชื้อชาติ/สัญชาติ/ศาสนา : </td><td align='center'> <i> $Nationality </i></td></tr>";
    echo "<tr><td>วัน/เดือน/ปี เกิด : </td><td align='center'> <i> $Birthday </i></td></tr>";
    echo "<tr><td>อายุ : </td><td align='center'> <i> $age </i></td></tr>";
    echo "<tr><td>เลขบัตรประชาชน : </td><td align='center'> <i> $Personal </i></td></tr>";
    echo "<tr><td>ที่อยู่ปัจุบัน : </td><td align='center'> <i> $Home </i></td></tr>";
    echo "<tr><td>เบอร์โทร : </td><td align='center'> <i> $Phon </i></td></tr>";
    echo "<tr><td>เกรดเฉลี่ยสะสม : </td><td align='center'> <i> $GPA </i></td></tr>";
    echo "<tr><td>สมัครเข้าคณะ/หลักสูตร : </td><td align='center'> <i> $A </i></td></tr>";
    echo "<tr><td>E-mail : </td><td align='center'> <i> $email </i></td></tr>";
?>
</body>
</html>