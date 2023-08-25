<?php
require_once('/Applications/XAMPP/xamppfiles/htdocs/auphpex/testdatabase/model/connectdatabase.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add</title>
</head>

<body>
    <form method="post">
        Tên: <input type="text" name="name"><br>
        Tuổi: <input type="number" name="age"><br>
        Quốc gia: <input type="text" name="country"><br>
        <input type="submit" value="Thêm">
    </form>
    <?php
    $name = $_POST['name'];
    $age = $_POST['age'];
    $country = $_POST['country'];
    // chèn dữ liệu vào
    $sql = "INSERT INTO testdatabase (name, age, country)
        VALUES ('$name', '$age', '$country')";
        
    $result =  $conn->query($sql);
    if ($result) {
        echo 'done';
    } else {
        echo 'fail';
    }
    // đóng kết nối
    mysqli_close($conn);
    ?>
</body>

</html>