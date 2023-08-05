<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex 2.1</title>
</head>

<body>
    <?php
    $schools = array(
        'studens' => array(
            'sv01' => array(
                'name' => 'Nguyễn Văn A',
                'birth' => '11/11/1999',
                'gender' => 'male'
            ),
            'sv02' => array(
                'name' => 'Nguyễn Thị B',
                'birth' => '10 /10/1999',
                'gender' => 'female'
            ),
            'sv03' => array(
                'name' => 'Nguyễn Văn C',
                'birth' => '11/11/1999',
                'gender' => 'male'
            ),
            'sv04' => array(
                'name' => 'Nguyễn Văn D',
                'birth' => '11/11/1999',
                'gender' => 'male'
            )
        ),
        'teacher' => array(
            'gv01' => array(
                'name' => 'Đặng Văn A',
                'birth' => '11/11/1979',
                'gender' => 'male'
            ),
            'gv02' => array(
                'name' => 'Đặng Văn B',
                'birth' => '11/11/1979',
                'gender' => 'male'
            ),
            'gv03' => array(
                'name' => 'Đặng Văn C',
                'birth' => '11/11/1979',
                'gender' => 'male'
            ),
            'gv01' => array(
                'name' => 'Đặng Văn D',
                'birth' => '11/11/1979',
                'gender' => 'male'
            )
        )
    )
    ?>
    <div class="container">
        <?php
        foreach ($schools as $k => $v):
        ?>
        <h1 class="list-title">
            <?php echo $k ?>
        </h1>
        <ul class="list-shools">
            <?php
            foreach ($v as $k1 => $v1):
            ?>
            <li>
                <p><span>Masv:</span><?php echo $k1; ?></p>
                <p><span>tên:</span><?php echo $v1['name']; ?></p>
                <p><span>Ngày sinh:</span><?php echo $v1['birth']; ?></p>
                <p><span>Giới tính:</span><?php echo $v1['gender']; ?></p>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php endforeach; ?>
    </div>
</body>

</html>