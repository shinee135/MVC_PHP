<?php
    class Phongban {
        private $IDPB;
        private $Tenpb;
        private $Mota;
        public function __construct($IDPB, $Tenpb, $Mota)
        {
            $this->IDPB = $IDPB;
            $this->Tenpb = $Tenpb;
            $this->Mota = $Mota;
        }
        public function getIDPB() {
            return $this->IDPB;
        }
        public function getTenpb() {
            return $this->Tenpb;
        }
        public function getMota() {
            return $this->Mota;
        }
        public function setIDPB($IDPB) {
            $this->IDPB = $IDPB;
        }
        public function setTenpb($Tenpb) {
            $this->Tenpb = $Tenpb;
        }
        public function setMota($Mota) {
            $this->Mota = $Mota;
        }
    }
?>