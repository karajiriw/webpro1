<html>
    <head><title>bookList1.php</title></head>
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
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        img {
            width: 100px;
            height: auto;
        }

        a {
            text-decoration: none;
            color: #e44d26;
        }

        a:hover {
            text-decoration: underline;
        }

        .center {
            text-align: center;
            margin-top: 20px;
        }
    </style>
    <body>
        <?php
            $hostname = "localhost";
            $username = "root";
            $password = "";
            $dbName = "bookStore";
            $conn = mysqli_connect($hostname, $username, $password);
            if (!$conn)
                die("ไม่สามารถติดต่อกับ MySQL ได้");
            mysqli_select_db($conn, $dbName) or die("ไม่สามารถเลือกฐานข้อมูล bookStoreได้");

            mysqli_query($conn,"set character_set_connection=utf8mb4");
            mysqli_query($conn,"set character_set_client=utf8mb4");
            mysqli_query($conn,"set character_set_results=utf8mb4");
            //$sql = "select * from book order by bookId";
            //$sql = "SELECT book.*, statusbook.* FROM book JOIN statusbook ON book.statusId = statusbook.statusId ORDER BY book.bookId";
            $sql = "SELECT book.*, typebook.TypeName, statusbook.StatusName
            FROM book 
            INNER JOIN typebook ON book.TypeID = typebook.typeID 
            INNER JOIN statusbook ON book.StatusId = statusbook.StatusId
            ORDER BY book.BookId";
            $result = mysqli_query ($conn, $sql);
            echo '<center>';
            echo '<br><h3>รายละเอียดหนังสือ</h3>';
            echo '<table width="500" border="0">';
            echo '</table>';
            echo '<br><table width="1500" border="1">';
            echo '<tr bgcolor="">';
            echo '<th width ="50" >ลำดับ</th>';
            echo '<th width ="100">รหัสหนังสือ</th>';
            echo '<th width = "200">ชื่อหนังสือ</th>';
            echo '<th width = "200">ประเภทหนังสือ</th>';
            echo '<th width = "200">สถานะหนังสือ</th>';
            echo '<th width = "200">สำนักพิมพ์</th>';
            echo '<th width = "200">ราคาหนังสือ</th>';
            echo '<th width = "200">ราคาเช่าหนังสือ</th>';
            echo '<th width = "200">จำนวนวัน</th>';
            echo '<th width = "200">รูปภาพ</th>';
            echo '<th width = "200">วันที่ซื้อ</th>';
            $row=1;
            while ($rs = mysqli_fetch_array($result))
            {
                echo '<tr align="center" bgcolor="">';
                echo '<td>'.$row.'</td>';
                echo '<td>'.$rs['BookID'].'</td>';
                echo '<td>'.$rs['BookName'].'</td>';
                echo '<td>'.$rs['TypeName'].'</td>';
                echo '<td>'.$rs['StatusName'].'</td>';
                echo '<td>'.$rs['Publish'].'</td>';
                echo '<td>'.$rs['UnitPrice'].'</td>';
                echo '<td>'.$rs['UnitRent'].'</td>';
                echo '<td>'.$rs['DayAmount'].'</td>';
                echo '<td><img src='.$rs['Picture'].' alt=""></td>';
                echo '<td>'.$rs['BookDate'].'</td>';
                echo '</tr>';
                $row++;
            }
            echo '</table>';
            mysqli_close ( $conn );
            echo '<br><br><a href="bookList1.php">กลับหน้าแรก</a>';
            echo '</center>';
        ?>
    </body>
</html>