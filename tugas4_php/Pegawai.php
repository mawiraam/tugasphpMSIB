<?php
/*
Buatlah Class Pegawai dengan member class:

    variabel : nip, nama, jabatan, agama, status
    konstruktor (nip, nama, jabatan, agama, status)
    fungsi:

    setGajiPokok (gunakan switch case : manager=>15jt, asmen=>10jt, kabag=>7jt, staff=>4jt)
    setTunjab = 20% dari Gaji Pokok
    setTunkel= 10% dari Gaji Pokok untuk sudah menikah (ternary)
    setZakatProfesi= 2,5% dari GajiPokok untuk muslim dan Gaji Kotor minimal 6jt
    mencetak => nip, nama, jabatan, agama, status, Gaji Pokok, Tunj Jab, Tunkel, Zakat, Gaji Bersih 


Buatlah objPegawai dengan data:

    5 instance object pegawai
    cetaklah semua struktur gaji pegawai
*/
class Pegawai{
    //member1 variabel
    public $nip, $nama, $jabatan, $agama, $status;
    //variabel konstanta & static di dlm class
    static $jml = 0;
    const PERUSAHAAN = 'PT Syariah Nurul Fikri';
    
    //member2 konstruktor
    public function __construct($nip, $nama, $jabatan, $agama, $status){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
        self::$jml++;
    }

    //setGajiPokok (gunakan switch case : manager=>15jt, asmen=>10jt, kabag=>7jt, staff=>4jt)
    public function setGajiPokok($jabatan){
        $this->jabatan = $jabatan;
        switch($jabatan){
            case 'Manager': $gajipokok = 15000000;break;
            case 'Asmen': $gajipokok = 10000000;break;
            case 'Kabag': $gajipokok = 7000000;break;
            case 'Staff': $gajipokok = 4000000;break;
            default: $gajipokok = '';
        }return $gajipokok;
    }

    //setTunjab = 20% dari Gaji Pokok    
    public function setTunJab($gajipokok){
        $gajipokok=$this->setGajiPokok($this->jabatan);
        $tunjab = $gajipokok * 0.2;
        return $tunjab;
    }

    //setTunkel= 10% dari Gaji Pokok untuk sudah menikah (ternary)
    public function setTunKel($status, $gajipokok){
        $this->status = $status;
        $gajipokok = $this->setGajiPokok($this->jabatan);;
        $tunstat = ($status == 'Menikah') ? 0.1 * $gajipokok : 0;
        return $tunstat;
    }
    public function setGajiKotor($gajipokok, $tunjab, $tunkel){
        $gajipokok = $this->setGajiPokok($this->jabatan);
        $tunjab = $this->setTunJab($this->gaji);
        $tunkel = $this->setTunKel($this->status, $this->gaji);
        $gajikotor = $gajipokok + $tunjab + $tunkel;
        return $gajikotor;
    }

    //    setZakatProfesi= 2,5% dari GajiPokok untuk muslim dan Gaji Kotor minimal 6jt
    public function setZakat($agama, $gajipokok, $gajikotor){
        $this->agama = $agama;
        $gajipokok = $this->setGajiPokok($this->jabatan);
        $gajikotor = $this->setGajiKotor($this->gaji, $this->setTunJab($this->gaji), $this->setTunKel($this->status, $this->gaji));
        
        if($gajikotor >= 6000000 && $agama == 'Islam'){
            $zakat = $gajipokok * 0.025;
        }else{
            $zakat = 0;
        }
        $this->zakatp = $zakat; 
        return $zakat;
    }
        public function setGajiBersih($gajikotor, $zakat){
        $gajikotor = $this->setGajiKotor($this->gaji, $this->setTunJab($this->gaji), $this->setTunKel($this->status, $this->gaji));
        $zakat = $this->setZakat($this->agama, $this->gaji, $this->setGajiKotor($this->gaji, $this->setTunJab($this->gaji), $this->setTunKel($this->status, $this->gaji)));

        $gajibersih = $gajikotor - $zakat;
        return $gajibersih;
    }
    
    //    mencetak => nip, nama, jabatan, agama, status, Gaji Pokok, Tunj Jab, Tunkel, Zakat, Gaji Bersih 
    public function mencetak(){
        echo '<b><u>'.self::PERUSAHAAN.'</u></b>'; 
        echo '<br/>No induk: '.$this->nip;
        echo '<br/>Nama: '.$this->nama;
        echo '<br/>Jabatan: '.$this->jabatan;
        echo '<br/>Agama: '.$this->agama;
        echo '<br/>Status: '.$this->status;
        echo '<br/>Gaji Pokok: Rp. '.number_format($this->setGajiPokok($this->jabatan), 0, ',', '.');
        echo '<br/>Tunjangan Keluarga: Rp. '.number_format($this->setTunKel($this->status, $this->gaji), 0, ',', '.');
        echo '<br/>Zakat: Rp. '.number_format($this->setZakat($this->agama, $this->gaji, $this->gajik), 0, ',', '.');
        echo '<br/>Gaji Bersih: Rp. '.number_format($this->setGajiBersih($this->gajik, $this->zakatp), 0, ',', '.');
        echo '<hr/>';
    }
}