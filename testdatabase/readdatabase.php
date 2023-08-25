<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>read</title>
</head>

<body>
    <?php
    require_once('/Applications/XAMPP/xamppfiles/htdocs/auphpex/testdatabase/model/connectdatabase.php');
    ?>
    <?php
    $sql = "SELECT * FROM testdatabase";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "id " . $row["id"] . " name " . $row["name"] . " age " . $row["age"] . " country " . $row["country"] . " 
    <a href='updatedatabase.php?id=" . $row["id"] . "'>Sửa</a>
    <a href='deletedatabase.php?id=".$row["id"]."'>Xoá</a>
    <br>";
    }
    ?>
</body>

</html>