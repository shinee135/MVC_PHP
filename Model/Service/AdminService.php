<?php
    include_once("../Model/Entity/Admin.php");
    class AdminService {
        public function __construct() {}
        
        public function login($username, $password) {
            include_once("../Model/connectdb.php");
            $sql="select * from admin where Username='".$username."' and Password='".$password."'";
            $result=mysqli_query($con, $sql);
            if (mysqli_num_rows($result) >= 1) {
                return true;
            } 
            return false;
        }
    }
?>