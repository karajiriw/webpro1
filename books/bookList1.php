<html>
    <head><title>bookList1.php</title>
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
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            text-align: center;
            padding: 10px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        a:hover {
            color: #e44d26;
        }

        .report {
            display: inline-block;
            margin-left: 20px;
            background-color: #e44d26;
            color: #fff;
            padding: 8px 15px;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>
    </head>    
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
            $sql = "select * from book order by bookId";
            $result = mysqli_query ($conn, $sql);
            echo '<center>';
            echo '<br><h3>รายชื่อหนังสือ</h3>';
            echo '<table width="500" border="0">';
            echo '<tr><td align="left"><a href="bookInsert1.php">เพิ่มรายการหนังสือ</a></td><tr>';
            echo '</table>';
            echo '<br><table width="500" border="1">';
            echo '<tr bgcolor="">';
            echo '<th width ="50" >ลำดับ</th>';
            echo '<th width ="100">รหัสหนังสือ</th>';
            echo '<th width = "200">ชื่อหนังสือ</th>';
            echo '<th width = "200">Detail</th>';
            echo '<th width ="80">แก้ไข</th>';
            echo '<th width ="80">ลบ</th></tr>';
            $row=1;
            while ($rs = mysqli_fetch_array($result))
            {
                echo '<tr align="center" bgcolor="">';
                echo '<td>'.$row.'</td>';
                echo '<td>'.$rs[0].'</a></td>';
                echo '<td align="left">'.$rs[1].'</td>';
                echo '<td><a href="bookDetail.php?bookId='.$rs[0].'" class="detail">[Detail]</a></td>';
                echo '<td><a href="bookUpdate1.php?bookId='.$rs[0].'">[แก้ไข]</a></td>';
                echo '<td><a href="bookDelete1.php?bookId='.$rs[0].'"onclick="return confirm(\' ยืนยันการลบข้อมูลหนังสือ '.$rs[1].'\')">[ลบ]</a></td>';
                echo '</tr>';
                $row++;
            }
            echo '</table>';
            mysqli_close ( $conn );
            echo '<br><br><a href="reportBook.php" class="report">Report</a>';
            echo '<a href="DayTo5.php" class="report">Day>5</a><td>';
            echo '<a href="bookMenu.php" class="report">Back to menu</a><td>';
            echo '</center>';
        ?>
    </body>
</html>