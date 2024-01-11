<html>
<head><title>Total Area GET</title></head>
<body>
<?php
    $number1 = $_GET['number1'];
    $number2 = $_GET['number2'];
    $A = $_GET['A'];
    echo "<p>";
    echo "<b>ข้อมูลผู้ใช้ใส่มา </b><br />";
    if ($A == "square")echo "กว้าง : <i> $number1 </i> <br/>
    ยาว : <i> $number2 </i> <br/>";
    if ($A == "triangle")echo "ฐาน : <i> $number1 </i> <br/>
    สูง : <i> $number2 </i> <br/>";
    if ($A == "circle")echo "Pi : <i> 3.1415 </i> <br/>
    r : <i> $number1 </i> <br/>";
    echo "A : <i> $A </i> <br/>";
    echo "Result : <i> ";
    if ($A == "square")echo ($number1 * $number2) ." </i> <br/>";
    if ($A == "triangle") echo (1 / 2 * $number1 * $number2) ." </i> <br/>";
    if ($A == "circle")echo (3.1415 * $number1 * $number1) ." </i> <br/>";
?>
</body>
</html>