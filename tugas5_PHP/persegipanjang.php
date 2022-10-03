<?php
require_once 'mainclass.php';

class Persegi_panjang extends Bentuk2d {
    public function namaBidang(){
        $nama = 'Persegi Panjang';
        return $nama;
    }
    public function luasBidang()
    {
        $panjang = 4;
        $lebar = 2;

        $luasBidang = $panjang * $lebar;
        return $luasBidang;
    }
    public function kelilingBidang()
    {
        $panjang = 4;
        $lebar = 2;

        $kelilingBidang = 2 * ($panjang + $lebar);
        return $kelilingBidang;
    }
    public function keterangan()
    {
        
        echo 'Panjang = 4 </br>';
        echo 'Lebar = 2 </br>';
        echo 'Rumus Luas = Panjang x Lebar </br>';
        echo 'Keliling = Sisi + Sisi + Sisi + Sisi atau 2 x (P + L)';

    }
    public function Mencetak(){
        echo ' Nama Bidang: '.$this->namaBidang();
        echo '</br> Luas lingkaran: '.$this->luasBidang();
        echo '</br> Keliling Bidang: '.$this->kelilingBidang();
        echo '</hr>';
    }
}
?>