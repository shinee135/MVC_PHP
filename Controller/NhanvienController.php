<?php
    session_start();
    include_once("../Model/Service/NhanvienService.php");
    class NhanvienController
    {
        private $nhanvienService = NULL;
        public function __construct()
        {
            $this->nhanvienService = new NhanvienService();
        }

        public function invoke()
        {
            if (isset($_GET['action'])) {
                $action = $_GET['action'];
                switch ($action) {
                    case 'list':
                        $this->getListNhanVien();
                        break;
                    case 'search':
                        $this->search();
                        break;
                    case 'guiDelete':
                        $this->guiDelete();
                        break;
                    case 'delete':
                        $this->delete();
                        break;
                }
            }
        }

        public function getListNhanVien()
        {
            $nhanviens = $this->nhanvienService->getListNhanVien();
            include_once("../View/Nhanvien/listNhanVien.php");
        }
        public function search()
        {
            $nhanviens = [];
            if(isset($_GET['searchBy']) && isset($_GET['searchVal'])) {
                $searchBy = $_GET['searchBy'];
                $searchVal = $_GET['searchVal'];
                $nhanviens = $this->nhanvienService->search($searchBy, $searchVal);
            }
            include_once("../View/Nhanvien/timkiemNhanVien.php");
        }
        public function guiDelete() {
            if(isset($_SESSION["login"])) {
                $nhanviens = $this->nhanvienService->getListNhanVien();
                include_once("../View/Nhanvien/delete.php");
            }
            else 
                include("../View/Authentication/login.php");
        }
        public function delete() {
            $this->nhanvienService->delete();
            $this->guiDelete();
        }
    }
    (new NhanvienController())->invoke();
?>