<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ex1.css">
</head>

<body>
    <?php
    if(isset ($_POST["chieurong"]) && isset($_POST["chieudai"])) {
        $chieuRong = $_POST["chieurong"];
        $chieuDai = $_POST["chieudai"];
        $dienTich = $chieuRong * $chieuDai;
        $al = "";
        if($dienTich > 10) {
            $al = '<span style="color: green;">Nhà lớn</span>';
        } else {
            $al = '<span style="color: red;">Nhà nhỏ</span>';
        }
    }
    ?>
    <form class="form-all" action="" method="post">
        <span>TÍNH DIỆN TÍCH HÌNH CHỮ NHẬT</span> <br>
        <span>Chiều rộng:</span><input type="text" name="chieurong">
        <br>
        <span>Chiều dài:</span><input type="text" name="chieudai">
        <br>
        <span>Diện tích:</span><input type="text" disabled value="<?php echo $dienTich ?>">
        <br>
        <?php echo $al ?>
        <br>
        <input type="submit" value="OK">
    </form>

</body>

</html>