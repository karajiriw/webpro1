<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครเรียน ณ มหาลัยแห่งหนึ่ง</title>
</head>
<body>
    <form action="Register-Back.php" method="get">
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
                    <input type="radio" name="gender" value="m">Male<br>
                    <input type="radio" name="gender" value="f">Female<br>
                </td>
            </tr>
            <tr>
                <td>เชื้อชาติ/สัญชาติ/ศาสนา : </td>
                <td><input type="text" name="Nationality" size="50" value=""></td>
            </tr>
            <tr>
                <td>วัน/เดือน/ปี เกิด : </td>
                <td><input type="text" name="Birthday" size="50" value=""></td>
            </tr>
            <tr>
                <td>อายุ : </td>
                <td><input type="number" name="Age" max="100" min="1" step="1" value=""></td>
            </tr>
            <tr>
                <td>เลขบัตรประชาชน : </td>
                <td><input type="text" name="Personal" size="50" value=""></td>
            </tr>
            <tr>
                <td>ที่อยู่ปัจุบัน : </td>
                <td><input type="text" name="Home" size="50" value=""></td>
            </tr>
            <tr>
                <td>เบอร์โทร : </td>
                <td><input type="text" name="Phon" size="50" value=""></td>
            </tr>
            <tr>
                <td>เกรดเฉลี่ยสะสม : </td>
                <td><input type="number" name="GPA" max="4" min="1" step="1" value=""></td>
            </tr>
            <tr>
                <td>สมัครเข้าคณะ/หลักสูตร</td>
                <td>
                <select multiple="multiple" name="formCountries[]">
                    <option value="Tecno">คณะเทคโนโลยีและการจัดการอุตสาหกรรม</option>
                    <option value="Green">คณะเกษตรศาสตร์</option>
                    <option value="Bisness">คณะบริหารธุรกิจ</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>E-mail : </td>
                <td><input type="text" name="email" size="50" value=""></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input name="btnSubmit" type="submit" value="Submit">

                    <input name="btnReset" type="reset" value=" Clear ">

                </td>
            </tr>
        </table>
    </form>
</body>
</html>