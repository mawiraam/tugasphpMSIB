<?php
require_once 'mainclass.php';

    class lingkaran extends Bentuk2d 
    {
        
        const phi= 3.14; 
        
        public function namaBidang(){
            $nama = 'lingkaran';
            return $nama;
        }
        public function luasBidang()
        {
            $jarijari = 4;

            $luasBidang = $jarijari * self::phi;
            return $luasBidang;
        }
        public function kelilingBidang()
        {
            $jarijari = 4;

            $kelilingBidang = self::phi * 2 * $jarijari;
            return $kelilingBidang;
            
        }
        public function keterangan()
        {

            echo 'Jari - Jari = 4 </br>';
            echo 'Phi = 3.14 </br>';
            echo 'Rumus Luas = Phi x Jar-Jari </br>';
            echo 'Keliling = Phi x 2 x Jari-Jari';

        }
        public function Mencetak()
        {

            echo ' Nama Bidang: '.$this->namaBidang();
            echo ' Keterangan: '.$this->keterangan();
            echo '</br> Luas lingkaran: '.$this->luasBidang();
            echo '</br> Keliling Bidang: '.$this->kelilingBidang();
            echo '</hr>';
        }
    }
    
?>