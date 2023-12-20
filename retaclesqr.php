<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="table.css">
</head>
<body>
    <?php 
        $section = "คำนวณพื้นที่สี่เหลี่ยม <br>";
        $W = 5;
        $H = 10;
        $total = $W*$H;
    ?>

    <table>
        <tr>
            <th colspan="2"> <?php echo $section; ?> </th>
            <th></th>
        </tr>
        <tr>
            <td><?php echo "ความกว้าง"; ?></td>
            <td><?php echo $W ?></td>
        </tr>
        <tr>
            <td><?php echo "ความยาว"; ?></td>
            <td><?php echo $H ?></td>
        </tr>
        <tr>
            <td><?php echo "ความกว้าง"; ?></td>
            <td><?php echo $W ?></td>
        </tr>
        <tr>
            <td><?php echo "พื้นที่สี่เหลี่ยม : $W * $H"; ?></td>
            <td><?php echo $total ?></td>
        </tr>
    </table>

    <!-- <div class="sec"><b><?php echo $section; ?></b></div>
    <div class="width"><?php echo "ความกว้าง $W <br>"; ?></div>
    <div class="leng"><?php echo "ความยาว $H <br>"; ?></div>
    <div class="area"><?php echo "พื้นที่สี่เหลี่ยม : $W * $H  $total"; ?></div> -->
</body>
</html>