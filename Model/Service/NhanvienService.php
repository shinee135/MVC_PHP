<?php
    include_once("../Model/Entity/Nhanvien.php");
    class NhanvienService {
        public function __construct() {}

        public function getListNhanVien() {
            include("../Model/connectdb.php");
            $sql = "select * from nhanvien";
            $result = mysqli_query($con, $sql);
            $i = 0;
            while($row = mysqli_fetch_array($result)) {
                $nhanviens[$i++] = new Nhanvien($row['IDNV'], $row['Hoten'], $row['Diachi'], $row['IDPB']);
                $i++;
            }
            // Giai phong tap cac ban ghi trong $result
            mysqli_free_result($result);
            // Dong ket noi
            mysqli_close($con);
            return $nhanviens;
        }

        public function search($searchBy, $searchVal) {
            include("../Model/connectdb.php");
            if($searchBy == 'All') {
                $sql="Select * from nhanvien where Hoten like '%".$searchVal."%' or Diachi like '%".$searchVal."%' or IDNV like '%".$searchVal."%'";
            } else {
                $sql="Select * from nhanvien where ".$searchBy." like '%".$searchVal."%'";
            }
            $result=mysqli_query($con, $sql);
            $i = 0;
            while($row = mysqli_fetch_array($result)) {
                $nhanviens[$i++] = new Nhanvien($row['IDNV'], $row['Hoten'], $row['Diachi'], $row['IDPB']);
                $i++;
            }
            // Giai phong tap cac ban ghi trong $result
            mysqli_free_result($result);
            // Dong ket noi
            mysqli_close($con);
            return $nhanviens;
        }
        public function delete() {
            include("../Model/connectdb.php");
            $sql="Select IDNV from nhanvien";
            $result=mysqli_query($con, $sql);
            while($row=mysqli_fetch_array($result)) {
                if(isset($_POST[$row['IDNV']])) {
                    $del = mysqli_query($con, "DELETE FROM NHANVIEN WHERE IDNV='".$row['IDNV']."'");
                }
            }
            // Giai phong tap cac ban ghi trong $result
            mysqli_free_result($result);
            // Dong ket noi
            mysqli_close($con);
        }
    }
?>