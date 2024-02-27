<html>
<head>
    <title>Update Book</title>
</head>
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

        h2 {
            color: #333;
            text-align: center;
        }

        form {
            width: 50%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #e44d26;
            color: #fff;
            cursor: pointer;
        }

        a {
            text-decoration: none;
            color: #333;
        }

        a:hover {
            color: #e44d26;
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

        mysqli_select_db($conn, $dbName) or die("ไม่สามารถเลือกฐานข้อมูล bookStore ได้");

        mysqli_query($conn, "set character_set_connection=utf8mb4");
        mysqli_query($conn, "set character_set_client=utf8mb4");
        mysqli_query($conn, "set character_set_results=utf8mb4");

        if (isset($_GET['bookId'])) {
            $bookId = $_GET['bookId'];

            $sql = "SELECT * FROM book WHERE BookId = $bookId";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                $bookData = mysqli_fetch_assoc($result);
            } else {
                die("ไม่พบข้อมูลหนังสือที่ต้องการแก้ไข");
            }
        } else {
            die("ไม่ระบุรหัสหนังสือที่ต้องการแก้ไข");
        }

        $typebookSql = "SELECT * FROM typebook";
        $typebookResult = mysqli_query($conn, $typebookSql);

        $statusbookSql = "SELECT * FROM statusbook";
        $statusbookResult = mysqli_query($conn, $statusbookSql);

        if (isset($_POST['submit'])) {
            $newBookName = $_POST['newBookName'];
            $newTypeId = $_POST['newTypeId'];
            $newStatusId = $_POST['newStatusId'];

            $updateSql = "UPDATE book SET 
                          BookName = '$newBookName',
                          TypeID = '" . sprintf("%03d", $newTypeId) . "',
                          StatusID = '" . sprintf("%02d", $newStatusId) . "'
                          WHERE BookId = $bookId";
            $updateResult = mysqli_query($conn, $updateSql);

            if ($updateResult) {
                echo "แก้ไขข้อมูลหนังสือเรียบร้อยแล้ว";
            } else {
                echo "เกิดข้อผิดพลาดในการแก้ไขข้อมูลหนังสือ: " . mysqli_error($conn);
            }
        }
    ?>

    <h2>แก้ไขข้อมูลหนังสือ</h2>
    <form method="post" action="">
        <label for="newBookName">ชื่อหนังสือใหม่:</label>
        <input type="text" name="newBookName" value="<?php echo $bookData['BookName']; ?>"><br>

        <label for="newTypeId">ประเภทหนังสือใหม่:</label>
        <select name="newTypeId">
            <?php
                while ($type = mysqli_fetch_assoc($typebookResult)) {
                    echo '<option value="' . $type['TypeID'] . '"';
                    if ($type['TypeID'] == $bookData['TypeID']) {
                        echo ' selected';
                    }
                    echo '>' . $type['TypeName'] . '</option>';
                }
            ?>
        </select><br>

        <label for="newStatusId">สถานะหนังสือใหม่:</label>
        <select name="newStatusId">
            <?php
                while ($status = mysqli_fetch_assoc($statusbookResult)) {
                    echo '<option value="' . $status['StatusID'] . '"';
                    if ($status['StatusID'] == $bookData['StatusID']) {
                        echo ' selected';
                    }
                    echo '>' . $status['StatusName'] . '</option>';
                }
            ?>
        </select><br>

        <input type="submit" name="submit" value="บันทึกการแก้ไข">
    </form>
    <br>
    <a href="bookList1.php" class="back"><center>กลับไปที่รายการหนังสือ</center></a>
</body>
</html>