<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr {
            margin: 8px 0;
        }
        td {
            min-width: 200px;
        }
    </style>
</head>

<body>
    <?php
        echo '<form action=".././Controller/PhongbanController.php?action=update" method="POST" name="formUpdate" onsubmit="return checkId();">'
        .'<br>'
        .'<table>'
        ."<caption>Cập nhật phòng ban $IDPB</caption>"
        .'<tr><td><label for="IDPB">IDPB</label></td>'
        .'<td><input class="readonly" type="text" readonly name="IDPB" value="'. $phongban->getIDPB().'"></td></tr>'

        .'<tr><td><label for="Tenpb">Tên phòng ban</label></td>'
        .'<td><input type="text" name="Tenpb" value="'. $phongban->getTenpb().'"></td></tr>'

        .'<tr><td><label for="Mota">Mô tả</label></td>'
        .'<td><input type="text" name="Mota" value="'. $phongban->getMota().'"></td></tr>'
        
        .'<tr><td></td><td><input value="Cập nhật" type="submit"></td></tr>'
        .'</table>'
        .'</form>';
    ?>
</body>
<script type = "text/javascript">
    function checkId() {
        const id = "<?php echo $idPB ?>";
        const idForm = document.formUpdate.id.value;
        if (id != idForm) {
            alert('Bạn không được phép sửa IDPB, IDPB là: ' + id);
        }
        return id === idForm;
    }
</script>
</html>