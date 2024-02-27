<html>
    <head>
        <title>Book Detail</title>
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
            text-align: left;
            padding: 10px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        img {
            max-width: 100px;
            height: auto;
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
        <?php
            $hostname = "localhost";
            $username = "root";
            $password = "";
            $dbName = "bookStore";
            $conn = mysqli_connect($hostname, $username, $password);

            if (!$conn) {
                die("ไม่สามารถติดต่อกับ MySQL ได้");
            }

            mysqli_select_db($conn, $dbName) or die("ไม่สามารถเลือกฐานข้อมูล bookStore ได้");

            mysqli_query($conn, "set character_set_connection=utf8mb4");
            mysqli_query($conn, "set character_set_client=utf8mb4");
            mysqli_query($conn, "set character_set_results=utf8mb4");

            if (isset($_GET['bookId'])) {
                $bookId = $_GET['bookId'];

                $sql = "SELECT * FROM book WHERE bookId = $bookId";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    $rs = mysqli_fetch_assoc($result);

                    echo '<center>';
                    echo '<h3>รายละเอียดหนังสือ</h3>';
                    echo '<table width="500" border="1">';
                    echo '<tr><th>รหัสหนังสือ</th><td>'.$rs['BookID'].'</td></tr>';
                    echo '<tr><th>ชื่อหนังสือ</th><td>'.$rs['BookName'].'</td></tr>';
                    echo '<tr><th>ประเภทหนังสือ</th><td>'.$rs['TypeID'].'</td></tr>';
                    echo '<tr><th>สถานะหนังสือ</th><td>'.$rs['StatusID'].'</td></tr>';
                    echo '<tr><th>สำนักพิมพ์</th><td>'.$rs['Publish'].'</td></tr>';
                    echo '<tr><th>ราคาหนังสือ</th><td>'.$rs['UnitPrice'].'</td></tr>';
                    echo '<tr><th>ราคาเช่าหนังสือ</th><td>'.$rs['UnitRent'].'</td></tr>';
                    echo '<tr><th>จำนวนวัน</th><td>'.$rs['DayAmount'].'</td></tr>';
                    echo '<tr><th>รูปภาพ</th><td><img src='.$rs['Picture'].' alt=""></td></tr>';
                    echo '<tr><th>วันที่ซื้อ</th><td>'.$rs['BookDate'].'</td></tr>';

                    echo '</table>';
                    echo '<br><a href="bookList1.php">กลับไปยังรายชื่อหนังสือ</a>';
                    echo '</center>';
                } else {
                    echo 'Error fetching book details: '.mysqli_error($conn);
                }
            } else {
                echo 'Invalid bookId parameter';
            }

            mysqli_close($conn);
        ?>
    </body>
</html>