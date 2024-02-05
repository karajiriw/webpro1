<html>
<head><title>แสดงการสร้างและใช้งานอารเรย์ Numberic Array</title>
</head>
<body>
<?php
$MaxStudent = 10;
$A = 'A';
$B = 'B';
$C = 'C';
$D = 'D';

for($n = 0 ; $n < $MaxStudent; $n++) {
    $score[$n] = rand(50, 100);
}
echo '<center><font size="4" color="blue"> Grade Report </font></center>';
echo '<table border="1" align="center">';
echo '<tr><td align="center" width="90">Student No.</td>';
echo '<td align="center" width="90">Score</td>';
echo '<td align="center" widtg="90">Grade</td></tr>';
for($n = 0 ; $n < $MaxStudent; $n++) {
    echo '<tr><td align="center" width="90">' . ($n +1 ) . '</td>';
    echo '<td align="center" width="90">' . $score[$n] . '</td>';
    if($score[$n] >= 80){
        echo '<td align="center" width="90">' . $A . '</td></tr>';
    }else
    if($score[$n] >= 70){
        echo '<td align="center" width="90">' . $B . '</td></tr>';
    }else
    if($score[$n] >= 60){
        echo '<td align="center" width="90">' . $C . '</td></tr>';
    }else
    if($score[$n] >= 50){
        echo '<td align="center" width="90">' . $D . '</td></tr>';
    }
    
}
echo '<tr><td colspan="2" align="center"> Average Score : ';
echo average( $score, $MaxStudent);
echo '</td></tr></table>';

function average($data, $max) {
    $total = 0;
    for($n = 0 ; $n < $max; $n++) {
        $total += $data[$n];
    }
    return( $total / $max );
}
?>
</body>
</html>