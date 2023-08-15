<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arraysearch</title>
</head>
<style>
    form {
        border: solid 1px black;
        padding: 10px 10px;
        width: 20%;
        text-align: center;
        
    }
</style>

<body>
    <?php
    $danhsach = array("Nam", "Nhan", "Cuong", "Hieu");
    $key = $_POST['search'];
    $al = '';
    if (in_array($key, $danhsach)) {
        $al = "Tim thay";
    } else {
        $al = "Khong thay";
    }
    ?>
    <form method="post">
        <label>Search</label>
        <input name="search" type="text">
        <br>
        <?php echo $al ?>
        <br>
        <input type="submit" value="OK">
    </form>
</body>

</html>