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
       echo '<form action=".././Controller/NhanvienController.php?action=delete" method="POST">';
       echo '<table border="1" width="100%">';
       echo '<caption>Danh sách nhân viên</caption>';
       echo '<tr><th>Mã nhân viên</th><th>Họ tên</th><th>Mã phòng ban</th><th>Địa chỉ</th><th>Xoá</th></tr>';
       foreach($nhanviens as $nhanvien) {
            echo '<tr><td>'.$nhanvien->getIDNV().'</td><td>'.$nhanvien->getHoten().'</td><td>'.$nhanvien->getIDPB()
                   .'</td><td>'.$nhanvien->getDiachi().'</td><td><input type="checkbox" name="'.$nhanvien->getIDNV().'" value="'.$nhanvien->getIDNV().'"></td></tr>';
       }
       echo '</table><button type="submit">Xoá tất cả</button><button type="reset">Reset</button></form>';     
    ?>
</body>
</html>