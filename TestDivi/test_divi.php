<html>
<head><title>การสร้างฟอร์มในการรับค่าเพื่อคำนวณ</title></head>
<body>
<form method="get" action="main_divi.php">
<table border="1" align="center" width="500">
    <tr>
        <td colspan="2" align="center">
            <big>โปรแกรมรับค่าตัวเลขเริ่มต้นและตัวเลขสิ้นสุด เพื่อหาเลขจำนวนมากที่สุดที่หาร 12 ลงตัว</big>
        </td>
    </tr>
    <tr>
        <td>รับค่าเริ่มต้น : </td>
        <td><input type="text" name="starter" size="15" value=""/> </td>
    <tr>
    <tr>
        <td>รับค่าสิ้นสุด : </td>
        <td><input type="text" name="ender" size="15" value=""/></td>
    </tr>
        <td colspan="2" align="center">
            <input type="submit" value=" OK " />
            <input type="reset" value=" Clear " />
        </td>
</tr>
</table>
</form>
</body>
</html>