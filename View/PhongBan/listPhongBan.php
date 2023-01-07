<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập kết nối CSDL</title>
</head>

<body>
    <?php
    echo '<table border="1" width="100%">';
    echo '<caption>Danh sách phòng ban</caption>';
    echo '<tr><th>Mã phòng ban</th><th>Tên phòng ban</th><th>Mô tả</th><th>Xem Nhân viên</th></tr>';
    foreach ($phongbans as $phongban) {
        echo '<tr><td>' . $phongban->getIDPB() . '</td><td>' . $phongban->getTenpb() . '</td><td>' . $phongban->getMota()
            . '</td>        
                <td>
                <a target="content" href="../Controller/PhongbanController.php?action=detail&IDPB=' . $phongban->getIDPB() . '">Xem chi tiết</a>
                </td>
                    </tr>';
    }
    echo '</table>';
    ?>
</body>

</html>