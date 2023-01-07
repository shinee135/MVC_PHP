<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tìm kiếm thông tin nhân viên</h1>
    <form action=".././Controller/NhanvienController.php" method="GET" onsubmit="return check()" name="formSearch">
        <input type="text" value="search" name="action" hidden>
        Tìm kiếm nhân viên theo: 
        <input type="radio" name="searchBy" value="IDNV">IDNV
        <input type="radio" name="searchBy" value="Hoten">Họ tên
        <input type="radio" name="searchBy" value="Diachi">Địa chỉ
        <input type="radio" name="searchBy" value="All">Tất cả<br>
        Nhập thông tin tìm kiếm: <input type="text" name="searchVal"><br>
        <input type="reset" value="Reset">        
        <input type="submit" value="OK">        
    </form>

    <?php
        if(count($nhanviens) > 0) {
            echo '<table border="1" width="100%">';
            echo '<caption>Danh sách nhân viên</caption>';
            echo '<tr><th>Mã nhân viên</th><th>Họ tên</th><th>Tên phòng ban</th><th>Địa chỉ</th></tr>';
            foreach ($nhanviens as $nhanvien) {
                echo '<tr><td>' . $nhanvien->getIDNV() . '</td><td>' . $nhanvien->getHoten() . '</td><td>' . $nhanvien->getIDPB()
                    . '</td><td>'.$nhanvien->getDiachi().'</td>
                            </tr>';
            }
            echo '</table>';
        }
    ?>
</body>
</html>
<script>
    function check() {
        if(document.formSearch.searchBy.value == '') {
            alert("Vui lòng chọn tiêu chí tìm kiếm");
            return false;
        }
        return true;
    }
</script>