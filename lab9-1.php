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
$F = 'F';

for($n = 0 ; $n < $MaxStudent; $n++) {
    $HW[$n] = rand(0, 10);
}
for($n = 0 ; $n < $MaxStudent; $n++) {
    $Assign[$n] = rand(0, 20);
}
for($n = 0 ; $n < $MaxStudent; $n++) {
    $Mid[$n] = rand(0, 35);
}
for($n = 0 ; $n < $MaxStudent; $n++) {
    $Final[$n] = rand(0, 35);
}
for($n = 0 ; $n < $MaxStudent; $n++) {
    $Score[$n] = $HW[$n]+$Assign[$n]+$Mid[$n]+$Final[$n];
}
echo '<center><font size="4" color="blue"> Grade Report </font></center>';
echo '<table border="1" align="center">';
echo '<tr><td align="center" width="90">Student No.</td>';
echo '<td align="center" width="90">HW</td>';
echo '<td align="center" width="90">Assign</td>';
echo '<td align="center" width="90">Mid</td>';
echo '<td align="center" width="90">Final</td>';
echo '<td align="center" width="90">Score</td>';
echo '<td align="center" widtg="90">Grade</td></tr>';
for($n = 0 ; $n < $MaxStudent; $n++) {
    echo '<tr><td align="center" width="90">' . ($n +1 ) . '</td>';
    echo '<td align="center" width="90">' . $HW[$n] . '</td>';
    echo '<td align="center" width="90">' . $Assign[$n] . '</td>';
    echo '<td align="center" width="90">' . $Mid[$n] . '</td>';
    echo '<td align="center" width="90">' . $Final[$n] . '</td>';
    echo '<td align="center" width="90">' . $Score[$n] . '</td>';
    if($Score[$n] >= 80){
        echo '<td align="center" width="90">' . $A . '</td></tr>';
    }else
    if($Score[$n] >= 70){
        echo '<td align="center" width="90">' . $B . '</td></tr>';
    }else
    if($Score[$n] >= 60){
        echo '<td align="center" width="90">' . $C . '</td></tr>';
    }else
    if($Score[$n] >= 50){
        echo '<td align="center" width="90">' . $D . '</td></tr>';
    }else
    if($Score[$n] < 50){
        echo '<td align="center" width="90">' . $F . '</td></tr>';
    }
}
echo '<tr><td colspan="2" align="center"> Average Score : ';
echo average( $Score, $MaxStudent);
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