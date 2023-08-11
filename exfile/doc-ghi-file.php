<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="doc-ghi-file.php" method="post">
        <div class="tieu-de">
            <h2>TẠO - GHI VÀ ĐỌC FILE VỪA TẠO</h2>
        </div>
        <div class="main-content">
            <span>Tên File</span><br>
            <label for="">
                <input name="ten_file" value="<?php echo isset($_POST['ten_file']) ? $_POST['ten_file'] : ''; ?>" type="text">
            </label>
            <br><span>Nội Dung</span>
            <div>
                <textarea name="noi_dung" id="" cols="50" rows="10"><?php echo isset($_POST['noi_dung']) ? $_POST['noi_dung'] : ''; ?></textarea>
            </div>
            <div>
                <input type="submit" name="submit" value="Ghi và đọc file">
            </div>
        </div>
    </form>
    <?php
    if (isset($_POST["submit"])) {
        if (isset($_POST["ten_file"]) && isset($_POST["noi_dung"])) {
            $ten_file = $_POST["ten_file"];
            $noi_dung = $_POST["noi_dung"];
            
            // Kiểm tra và xử lý tên file
            if (!empty($ten_file)) {
                $ten_file = preg_replace('/[^A-Za-z0-9_]/', '', $ten_file); // Loại bỏ ký tự không hợp lệ
                $file_path = "$ten_file.txt"; // Gán phần mở rộng txt
                $file = fopen($file_path, "w") or die("Không thể tạo file");
                fwrite($file, $noi_dung);
                fclose($file);

                echo "<p><b>Đã ghi file thành công</b></p>";

                // Đọc nội dung file
                if (file_exists($file_path)) {
                    $line = file_get_contents($file_path);
                    echo "<br><b>Nội dung của File</b><br>";
                    echo '<div class="void-main">';
                    echo "<pre>$line</pre>";
                    echo '</div>';
                } else {
                    echo "<p>Không thể đọc file</p>";
                }
            } else {
                echo "<p>Vui lòng nhập tên file</p>";
            }
        } else {
            echo "<p>Vui lòng nhập đủ tên file và nội dung</p>";
        }
    }
    ?>
</body>
</html>