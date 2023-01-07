<?php
    include_once("../Model/Entity/Phongban.php");
    include_once("../Model/Entity/Nhanvien.php");
    class PhongbanService {
        public function __construct() {}

        public function getListPhongBan() {
            include("../Model/connectdb.php");
            $sql = "select * from phongban";
            $result = mysqli_query($con, $sql);
            $i = 0;
            while($row = mysqli_fetch_array($result)) {
                $phongbans[$i++] = new Phongban($row['IDPB'], $row['TenPB'], $row['Mota']);
            }
            // Giai phong tap cac ban ghi trong $result
            mysqli_free_result($result);
            // Dong ket noi
            mysqli_close($con);
            return $phongbans;
        }

        public function getListNhanVienByIDPB($IDPB) {
            include("../Model/connectdb.php");
            $nhanviens = [];
            $sql = "select * from nhanvien where IDPB = '$IDPB'";
            $result = mysqli_query($con, $sql);
            $i = 0;
            while($row = mysqli_fetch_array($result)) {
                $nhanviens[$i++] = new NhanVien($row['IDNV'], $row['Hoten'], $row['Diachi'], $row["IDPB"]);
            }
            return $nhanviens;
        }

        public function getPhongBanByIDPB($IDPB) {
            include("../Model/connectdb.php");
            $sql = "select * from phongban where IDPB='$IDPB'";
            $result = mysqli_query($con, $sql);
            if(mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result);
                $phongban = new Phongban($row['IDPB'], $row['TenPB'], $row['Mota']);
            }
            return $phongban;
        }

        public function update($IDPB, $TenPB, $Mota) {
            include("../Model/connectdb.php");
            $sql="update phongban set TenPB='$TenPB', Mota = '$Mota' where IDPB = '$IDPB'";
            mysqli_query($con, $sql);
            return mysqli_affected_rows($con) > 0;
        }
    }
?>