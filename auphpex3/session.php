<?php
    session_start();
    if(isset($_POST['submit'])) {
        setcookie('user_info', serialize($_POST),time() + 3600);

        header('Location: docsession.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Login</h1>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username"><br>
        <label for="email">email:</label>
        <input type="text" name="email" id="email"><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password"><br>
        <input class="submit" type="submit" name="submit" value="Login">
    </form>
</body>
</html>