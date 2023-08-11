<?php
    $file = 'baitho.txt';
    if(file_exists($file)) {
        echo 'fine found!';
    } else {
        echo 'my_setting.txt does not exits';
    }
?>