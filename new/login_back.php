<?php
    session_start();
    require_once('/Applications/XAMPP/xamppfiles/htdocs/auphpex/new/model/connect.php');
    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username = '$username' AND password = ('$password')";
        $res = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($res);
        if ($row > 0) {
            $_SESSION['usernameAdmin'] = $username; // khởi tạo session cho users
            while($row = mysqli_fetch_assoc($res)) {
                $_SESSION['id-Admin'] = $row['id'];
            }
            header('Location: ./index.php');
        } else {
            echo 'llll';
        }
    }
?>