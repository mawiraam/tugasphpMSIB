<?php
require_once 'mainclass.php';

    class Segitiga extends Bentuk2d{

        public function namaBidang(){
            $nama = 'Segitiga Siku Siku';
            return $nama;
        }
        public function luasBidang()
        {
            $alas = 3;
            $tinggi = 4;

            $luasBidang = 0.5 * $alas * $tinggi;
            return $luasBidang;
        }
        public function kelilingBidang()
        {
            $alas = 3;
            $tinggi = 4;

            $sisiMiring = pow($alas , 2) + pow($tinggi , 2);
            $hasilMiring = sqrt($sisiMiring);
     
            $kelilingBidang = $alas + $tinggi + $hasilMiring;
            return $kelilingBidang;
        }
        public function keterangan()
        {
            
            echo 'Alas = 3 </br>';
            echo 'Tinggi = 4 </br>';
            echo 'Rumus Luas = 1/2 x Alas x Tinggi </br>';
            echo 'Keliling = Sisi + Sisi + Sisi';
            
    
        }
        public function Mencetak(){
            echo ' Nama Bidang: '.$this->namaBidang();
            echo '</br> Luas lingkaran: '.$this->luasBidang();
            echo '</br> Keliling Bidang: '.$this->kelilingBidang();
            echo '</hr>';
        }
    }
?>