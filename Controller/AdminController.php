<?php
    session_start();
    include_once("../Model/Service/AdminService.php");
    class AdminController {
        private $adminService = NULL;
        public function __construct(){
            $this->adminService = new AdminService();
        }

        public function invoke() {
            if(isset($_GET['action'])) {
                $action = $_GET['action'];
                switch($action) {
                    case 'login':
                        $this->login();
                        break;
                    case 'register':
                        
                        break;
                }
            }
        }

        public function login() {
            if($this->adminService->login($_POST['Username'], $_POST['Password'])) {
                $_SESSION["login"] = true;
                include_once("../View/PhongBan/updatePhongBan.php");
            }
            include_once("Controller/PhongbanController.php?action=guiUpdate");
        }
        
    }
    (new AdminController())->invoke();
?>