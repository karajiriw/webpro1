<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครเรียน ณ มหาลัยแห่งหนึ่ง</title>
</head>
<body>
<form action="Register-main2.php" method="get">
    <table border="1" align="center" width="550">
            <tr>
                <td colspan="2" align="center">
                    สมัครเรียน ณ มหาลัยแห่งหนึ่ง
                </td>
            </tr>
            <tr>
                <td>ชื่อ - นามสกุล : </td>
                <td><input type="text" name="Name" size="50" value=""></td>
            </tr>
            <tr>
                <td>gender : </td>
                <td align="center">
                    <input type="radio" name="gender1" value="ชาย">Male<br>
                    <input type="radio" name="gender1" value="หญิง">Female<br>
                </td>
            </tr>
            <tr>
                <td>เชื้อชาติ/สัญชาติ/ศาสนา : </td>
                <td><input type="text" name="Nationality" size="50" value=""></td>
            </tr>
            <tr>
                <td>วัน/เดือน/ปี เกิด : </td>
                <td><input type="date" name="Birthday" size="50" value=""></td>
            </tr>
            <tr>
                <td>อายุ : </td>
                <td><input type="number" name="Age" max="100" min="1" step="1" value=""></td>
            </tr>
            <tr>
                <td>เลขบัตรประชาชน : </td>
                <td><input type="text" maxlength="13" name="Personal" size="50" value=""></td>
            </tr>
            <tr>
                <td>ที่อยู่ปัจุบัน : </td>
                <td><input type="text" name="Home" size="50" value=""></td>
            </tr>
            <tr>
                <td>เบอร์โทร : </td>
                <td><input type="text" maxlength="10" name="Phon" size="50" value=""></td>
            </tr>
            <tr>
                <td>เกรดเฉลี่ยสะสม : </td>
                <td><input type="text" name="GPA" value=""></td>
            </tr>
            <tr>
                <td>สมัครเข้าคณะ/หลักสูตร</td>
                <td>
                    <input type="radio" name="A" value="คณะเทคโนโลยีและการจัดการอุตสาหกรรม">คณะเทคโนโลยีและการจัดการอุตสาหกรรม<br>
                    <input type="radio" name="A" value="คณะเกษตรศาสตร์">คณะเกษตรศาสตร์<br>
                    <input type="radio" name="A" value="คณะบริหารธุรกิจ">คณะบริหารธุรกิจ<br>
                </select>
                </td>
            </tr>
            <tr>
                <td>E-mail : </td>
                <td><input type="text" name="email" size="50" value=""></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input name="btnSubmit" type="submit" value="OK">
                    <input name="btnReset" type="reset" value=" Clear ">
                </td>
            </tr>
        </table>
    </form>
    <br><br>
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
    echo "<table align='center' width='20%' border='1'>";
    echo "<tr><td colspan='2' align='center'><b>สมัครเรียน ณ มหาลัยแห่งหนึ่ง</b></td></tr>";
    echo "<tr><td>ชื่อ-นามสกุล : </td><td align='center'> <i> $name </i></td></tr>";
    echo "<tr><td>เพศ : </td><td align='center'> <i> $gender </i></td></tr>";
    echo "<tr><td>วัน/เดือน/ปี เกิด : </td><td align='center'> <i> $Nationality </i></td></tr>";
    echo "<tr><td>เลขบัตรประชาชน : </td><td align='center'> <i> $Personal </i></td></tr>";
    echo "<tr><td>ที่อยู่ปัจุบัน : </td><td align='center'> <i> $Home </i></td></tr>";
    echo "<tr><td>เบอร์โทร : </td><td align='center'> <i> $Phon </i></td></tr>";
    echo "<tr><td>เกรดเฉลี่ยสะสม : </td><td align='center'> <i> $GPA </i></td></tr>";
    echo "<tr><td>สมัครเข้าคณะ/หลักสูตร : </td><td align='center'> <i> $A </i></td></tr>";
    echo "<tr><td>E-mail : </td><td align='center'> <i> $email </i></td></tr>";
    ?>
</body>
</html>