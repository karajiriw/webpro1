<html>
<head><title>โปรแกรมรับค่าจากฟอร์มแบบ GET</title></head>
<body>
<?php
    $start = $_GET['starter'];
    $end = $_GET['ender'];

    echo "<b>โปรแกรมรับค่าตัวเลขเริ่มต้นและตัวเลขสิ้นสุด เพื่อหาเลขจำนวนมากที่สุดที่หาร 12 ลงตัว</b><br />";
    $maxDivisibleBy12 = 0;
            for ($i = $end; $i >= $start; $i--) {
                if ($i % 12 === 0) {
                    $maxDivisibleBy12 = $i;
                    break;
                }
            }
    echo "ผลลัพธ์ คือ $maxDivisibleBy12";
?>
</body>
</html>