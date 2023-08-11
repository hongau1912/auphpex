<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .show {
            background-color: red;
            width: 20%;
            text-align: center;
            padding: 30px 0px;
            color: white;
        }
    </style>
</head>

<body>
    <?php
        $baitho = 'baitho.txt';
        $fh = fopen ("baitho.txt", 'r') or die ("null");
        $line = fread($fh, filesize($baitho));
        echo "<pre class='show'>$line</pre>";
        fclose($fh);
    ?>
</body>
</html>