<html>
<head><title>โปรแกรมรับค่าจากฟอร์มแบบ GET</title></head>
<body>
<?php
    $row = $_GET['rower'];
    $star;
    $num;

    echo "<p>";
    echo "<b>โปรแกรมรับค่าจำนวนแถวและแสดงผลลัพธ์เป็นภาพภูเขา</b><br />";
    for ($num = 1; $num <= $row; $num++) {
        echo "<pre> row:$num    ";
        for ($star = 1; $star <= $num; $star++){
            echo "<span style = color:green> * </span>";
        }echo "</pre>";
    }
    
?>
</body>
</html>