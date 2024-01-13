<html>
<head><title>โปรแกรมรับค่าจากฟอร์มแบบ GET</title></head>
<body>
<?php
    $min = $_GET['Min'];
    $max = $_GET['Max'];
    $total = 0;

    echo "<p>";
    echo "<b>หาผลรวมตัวเลขจากที่ user กรอก </b><br />";
    if ($min < $max) {
        for ($num = $min ; $num <= $max ; $num++){
            $total += $num;
        }
        echo "ผลรวมตัวเลข : <i> $total </i> <br/>";
    } else echo "กรุณากรอกใหม่ (*ค่าไม่ถูกต้องตามเงื่อนไข)"
?>
</body>
</html>