<html>
<head><title>โปรแกรมรับค่าจากฟอร์มแบบ GET</title></head>
<body>
<?php
    $salary = $_GET['salarer'];
    $deduction = $_GET['deductioner'];
    $spend = $_GET['spender'];
    $incomer = 0;
    $tax = 0;
    $income = ($salary*12)-$deduction-$spend;
    
    echo "<b>โปรแกรมคำนวณภาษีที่ต้องจ่าย</b><br />";
    if  ($income <= 150000){
        $incomer = 1;
        $per = "ไม่เสียภาษี";
    }else
    if  ($income <= 30000){
        $incomer = 5/100;
        $per = "5%";
    }else
    if  ($income <= 500000){
        $incomer = 10/100;
        $per = "10%";
    }else
    if  ($income <= 750000){
        $incomer = 15/100;
        $per = "15%";
    }else
    if  ($income <= 1000000){
        $incomer = 20/100;
        $per = "20%";
    }else
    if  ($income <= 2000000){
        $incomer = 25/100;
        $per = "25%";
    }else
    if  ($income <= 5000000){
        $incomer = 30/100;
        $per = "30%";
    }else
    if  ($income >= 5000001){
        $incomer = 35/100;
        $per = "35%";
    }

    $tax = $income * $incomer;

    echo "เงินได้สุทธิ = $income</br>";
    echo "ภาษี = $income * $per = $tax";

?>
</body>
</html>