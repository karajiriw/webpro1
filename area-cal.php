<html>
<head><title>การสร้างฟอร์มในการรับค่าเพื่อคำนวณ</title></head>
<body>
<form method="get" action="total-area-cal.php">
<table border="1" align="center" width="500">
    <tr>
        <td colspan="2" align="center">
            <big>คำนวณหาพื้นที่ทั้ง 3 </big>
        </td>
    </tr>
    <tr>
        <td>Enter Number 1 : </td>
        <td><input type="text" name="number1" size="15" value=""/> </td>
    </tr>
        <td>Enter Number 2 : </td>
        <td><input type="text" name="number2" size="15" value=""/></td>
    </tr>
    <tr>
        <td> Area : </td>
        <td align="center">
            <input type="radio" name="A" value="square"> square <br>
            <input type="radio" name="A" value="triangle"> triangle <br>
            <input type="radio" name="A" value="circle"> circle (*เขียนแค่ num1) <br>

        </td>
    </tr>
    <tr>
        <td colspan="2" align="center">
            <input type="submit" value=" OK " />
            <input type="reset" value=" Clear " />
        </td>
</tr>
</table>
</form>
</body>
</html>