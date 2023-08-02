<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex2</title>
    <link rel="stylesheet" href="ex2.css">
</head>
<body>
    <?php 
        if(isset($_POST['diemhk1']) && isset($_POST['diemhk2'])) {
            $diemHK1 = $_POST['diemhk1'];
            $diemHK2 = $_POST['diemhk2'];
            $diemTB = ($diemHK1 + $diemHK2 * 2) / 3;
            $diemTB = round($diemTB, 2);
            $ketQua = "";
            $hocLuc = "";
            if($diemTB >= 5) {
                $ketQua = "Được lên lớp";
            } else {
                $ketQua = "Ở lại lớp";
            }
            if($diemTB >= 8) {
                $hocLuc = "Giỏi";
            } elseif ($diemTB >= 6.5) {
                $hocLuc = "Khá";
            } elseif ($diemTB >= 5) {
                $hocLuc = "Trung Bình";
            } else {
                $hocLuc = "Yếu";
            }
        }
    ?>
    <form class="form-all" method="post">
        Điểm HK1: <input type="text" name="diemhk1">
        <br>
        Điểm HK2: <input type="text" name="diemhk2">
        <br>
        Điểm trung bình: <input type="text" name="diemtrungbinh" value="<?php echo $diemTB ?>" disabled>
        <br>
        Kết quả: <input type="text" name="ketqua" value="<?php echo $ketQua ?>" disabled>
        <br>
        Xếp loại học lực: <input type="text" name="hocluc" value="<?php echo $hocLuc ?>"  disabled>
        <br>
        <input type="submit" value="Xem kết quả" name="xemketqua">
    </form>
</body>
</html>