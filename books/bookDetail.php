<html>
    <head><title>bookList1.php</title></head>
    <style>
        img {
            width:200px;
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
            JOIN typebook ON book.TypeID = typebook.typeID 
            JOIN statusbook ON book.StatusId = statusbook.StatusId
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
                echo '<td><a href="bookDetail1_edit.php?bookId='.$rs[0].'">'.$rs[0].'</a></td>';
                echo '<td>'.$rs[1].'</td>';
                echo '<td>'.$rs['TypeName'].'</td>';
                echo '<td>'.$rs['StatusName'].'</td>';
                echo '<td>'.$rs[4].'</td>';
                echo '<td>'.$rs[5].'</td>';
                echo '<td>'.$rs[6].'</td>';
                echo '<td>'.$rs[7].'</td>';
                echo '<td><img src='.$rs[8].' alt=""></td>';
                echo '<td>'.$rs[9].'</td>';
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