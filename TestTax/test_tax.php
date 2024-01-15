<html>
<head><title>การสร้างฟอร์มในการรับค่าเพื่อคำนวณ</title></head>
<body>
<form method="get" action="main_tax.php">
<table border="1" align="center" width="500">
    <tr>
        <td colspan="2" align="center">
            <big>โปรแกรมคำนวณภาษีที่ต้องจ่าย</big>
        </td>
    </tr>
    <tr>
        <td>Enter Salary : </td>
        <td><input type="text" name="salarer" size="15" value=""/> </td>
    <tr>
    <tr>
        <td>Enter Deduction : </td>
        <td><input type="text" name="deductioner" size="15" value=""/> </td>
    </tr>
    <tr>
        <td>Enter Spend : </td>
        <td><input type="text" name="spender" size="15" value=""/> </td>
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