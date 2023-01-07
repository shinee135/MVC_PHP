<?php
    class Nhanvien {
        private $IDNV;
        private $Hoten;
        private $Diachi;
        private $IDPB;

        public function __construct($IDNV, $Hoten, $Diachi, $IDPB) {
            $this->IDNV = $IDNV;
            $this->Hoten = $Hoten;
            $this->Diachi = $Diachi;
            $this->IDPB = $IDPB;
        }

        public function getIDNV() {
            return $this->IDNV;
        }
        public function getHoten() {
            return $this->Hoten;
        }
        public function getDiachi() {
            return $this->Diachi;
        }
        public function getIDPB() {
            return $this->IDPB;
        }
        public function setIDNV($IDNV) {
            $this->IDNV = $IDNV;
        }
        public function setHoten($Hoten) {
            $this->Hoten = $Hoten;
        }
        public function setDiachi($Diachi) {
            $this->Diachi = $Diachi;
        }
        public function setIDPB($IDPB) {
            $this->IDPB = $IDPB;
        }
    }
?>