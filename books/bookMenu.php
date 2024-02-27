<!DOCTYPE html>
<html>
<head>
    <title>Book Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        h3 {
            color: #333;
        }

        table {
            width: 70%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
        }

        td {
            text-align: center;
            padding: 10px;
            border: 1px solid #ddd;
        }

        a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        a:hover {
            color: #e44d26;
        }
    </style>
</head>
<body>
    <header>
        <h1>Book Menu</h1>
    </header>

    <?php
        echo '<center>';
        echo '<h3>Menu</h3>';
        echo '<table>';
        echo '<tr>';
        echo '<td><a href="bookList1.php">รายชื่อหนังสือ</a></td>';
        echo '<td><a href="reportBook.php">รายงานหนังสือทั้งหมด</a></td>';
        echo '<td><a href="Dayto5.php">รายชื่อหนังสือที่ยืม 5 วันขึ้นไป</a></td>';
        echo '<td><a href="bookInsert1.php">เพิ่มรายการหนังสือ</a></td>';
        echo '</tr>';
        echo '</table>';
        echo '</center>';
    ?>
</body>
</html>
