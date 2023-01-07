<?php
    session_start();
    include_once("../Model/Service/PhongbanService.php");
    class PhongbanController {
        private $phongBanService = NULL;
        public function __construct(){
            $this->phongBanService = new PhongbanService();
        }

        public function invoke() {
            if(isset($_GET['action'])) {
                $action = $_GET['action'];
                switch($action) {
                    case 'list':
                        $this->getListPhongban();
                        break;
                    case 'detail':
                        $this->getListNhanVienByIDPB();
                        break;
                    case 'guiUpdate':
                        $this->guiUpdate();
                        break;
                    case 'update':
                        $this->update();
                        break;
                }
            } 
            if(isset($_POST['action'])) {
                echo 'Hello';
            }
        }

        public function getListPhongBan() {
            $phongbans = $this->phongBanService->getListPhongBan();
            include("../View/PhongBan/listPhongBan.php");
        }

        public function getListNhanVienByIDPB() {
            $IDPB = $_GET['IDPB'];
            $nhanviens = $this->phongBanService->getListNhanVienByIDPB($IDPB);
            include("../View/PhongBan/detailPhongBan.php");
        }

        public function guiUpdate() {
            if(isset($_SESSION["login"])) {
                if(isset($_GET['IDPB'])) {
                    $IDPB = $_GET['IDPB'];
                    $phongban = $this->phongBanService->getPhongBanByIDPB($IDPB);
                    include_once("../View/PhongBan/formUpdate.php");
                } else {
                    $phongbans = $this->phongBanService->getListPhongBan();
                    include_once("../View/PhongBan/updatePhongBan.php");
                }
            }
            else 
                include_once("../View/Authentication/login.php");
        }

        public function update() {
            $this->phongBanService->update($_POST['IDPB'], $_POST['Tenpb'], $_POST['Mota']);
            $phongbans = $this->phongBanService->getListPhongBan();
            include_once("../View/PhongBan/updatePhongBan.php");
        }
    }
    (new PhongbanController())->invoke();
?>