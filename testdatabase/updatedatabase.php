<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa</title>
</head>

<body>

    <?php
        require_once('/Applications/XAMPP/xamppfiles/htdocs/auphpex/testdatabase/model/connectdatabase.php');

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_GET['id'];
            $name = $_POST['name'];
            $age = $_POST['age'];
            $country = $_POST['country'];

            $update = "UPDATE testdatabase
                    SET name = '$name', age = '$age', country = '$country'
                    WHERE id = '$id'";
            $done = $conn->query($update);

            if ($done) {
                echo "Dữ liệu đã được cập nhật thành công!";
            } else {
                echo "Có lỗi xảy ra khi cập nhật dữ liệu: " . $conn->error;
            }
        }

        $id = $_GET['id'];
        $sql = "SELECT * FROM testdatabase WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    ?>

    <form action="/testdatabase/readdatabase.php" method="post">
        Tên: <input type="text" name="name" placeholder="<?php echo $row["name"]; ?>"><br>
        Tuổi: <input type="number" name="age" placeholder="<?php echo $row["age"]; ?>"><br>
        Quốc gia: <input type="text" name="country" placeholder="<?php echo $row["country"]; ?>"><br>
        <input type="submit" value="Sửa">
    </form>
</body>

</html>