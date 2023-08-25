<?php
    require_once('/Applications/XAMPP/xamppfiles/htdocs/auphpex/new/model/connect.php');
    if (isset($_POST['submit'])) {
        if (isset($_POST['fullname'])) {
            $fullname = $_POST['fullname'];
        }

        if (isset($_POST['username'])) {
            $username = $_POST['username'];
        }

        if (isset($_POST['email'])) {
            $email = $_POST['email'];
        }

        if (isset($_POST['phone'])) {
            $phone = $_POST['phone'];
        }

        if (isset($_POST['address'])) {
            $address = $_POST['address'];
        }

        if (isset($_POST['password'])) {
            $password = $_POST['password'];
        }

        // if(isset($_POST['confirmPassword'])) {
        //     $confirmPassword = $_POST['confirmPassword'];
        // }

        $sql = "INSERT INTO users (fullname, username, password, email, address, phone)
            VALUE ('$fullname', '$username', '$password', '$email', '$address', '$phone')";
        $result = mysqli_query($conn, $sql);
        header('location: http://localhost/auphpex/new/login.php');
    }
?>